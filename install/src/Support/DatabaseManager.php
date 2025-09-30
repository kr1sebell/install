<?php
declare(strict_types=1);

namespace Installer\Support;

use mysqli;
use mysqli_sql_exception;
use RuntimeException;

class DatabaseManager
{
    /** @var array{host:string,port:string,user:string,password:string,name:string} */
    private array $config;

    public function __construct(array $config)
    {
        $this->config = [
            'host' => $config['host'] ?? '127.0.0.1',
            'port' => (string)($config['port'] ?? '3306'),
            'user' => $config['user'] ?? '',
            'password' => $config['password'] ?? '',
            'name' => $config['name'] ?? '',
        ];
    }

    public function testConnection(): void
    {
        $connection = $this->connect();
        $connection->close();
    }

    /**
     * @param string $sql
     * @param string $source
     *
     * @throws mysqli_sql_exception
     */
    public function runSql(string $sql, string $source, Logger $logger): void
    {
        $sql = trim($sql);
        if ($sql === '') {
            return;
        }

        $logger->info(sprintf('Выполнение %s', $source));

        $connection = $this->connect();

        try {
            if (!$connection->multi_query($sql)) {
                throw new RuntimeException('MySQLi не смог выполнить запрос: ' . $connection->error);
            }

            do {
                if ($result = $connection->store_result()) {
                    $result->free();
                }
            } while ($connection->more_results() && $connection->next_result());
        } finally {
            $connection->close();
        }
    }

    private function connect(): mysqli
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $connection = new mysqli(
            $this->config['host'],
            $this->config['user'],
            $this->config['password'],
            $this->config['name'],
            (int)$this->config['port']
        );

        $connection->set_charset('utf8mb4');

        return $connection;
    }
}
