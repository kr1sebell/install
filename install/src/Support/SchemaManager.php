<?php
declare(strict_types=1);

namespace Installer\Support;

use RuntimeException;

class SchemaManager
{
    private string $schemaDirectory;
    private DatabaseManager $databaseManager;
    private Logger $logger;

    public function __construct(string $schemaDirectory, DatabaseManager $databaseManager, Logger $logger)
    {
        $this->schemaDirectory = rtrim($schemaDirectory, '/');
        $this->databaseManager = $databaseManager;
        $this->logger = $logger;
    }

    /**
     * @param array<string,string> $replacements
     * @return array<int,string>
     */
    public function execute(array $replacements): array
    {
        if (!is_dir($this->schemaDirectory)) {
            throw new RuntimeException('Каталог схемы не найден: ' . $this->schemaDirectory);
        }

        $files = glob($this->schemaDirectory . '/*.sql') ?: [];
        sort($files, SORT_NATURAL);

        $executed = [];

        foreach ($files as $file) {
            $sql = file_get_contents($file);
            if ($sql === false) {
                throw new RuntimeException('Не удалось прочитать файл схемы: ' . $file);
            }

            $sql = $this->applyReplacements($sql, $replacements);
            $basename = basename($file);
            $this->databaseManager->runSql($sql, $basename, $this->logger);
            $executed[] = $basename;
        }

        return $executed;
    }

    /**
     * @param array<string,string> $replacements
     */
    private function applyReplacements(string $sql, array $replacements): string
    {
        $map = [];
        foreach ($replacements as $key => $value) {
            $map['{{' . $key . '}}'] = $value;
        }

        return strtr($sql, $map);
    }
}
