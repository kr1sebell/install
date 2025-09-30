<?php
declare(strict_types=1);

namespace Installer\Support;

use RuntimeException;

class ConfigWriter
{
    private string $targetFile;
    private ?string $template;

    public function __construct(string $targetFile, ?string $template = null)
    {
        $this->targetFile = $targetFile;
        $this->template = $template;
    }

    /**
     * @param array{host:string,port:string,user:string,password:string,name:string} $config
     */
    public function write(array $config): void
    {
        $content = $this->loadTemplate();

        $replacements = [
            '##DB_HOST' => $config['host'],
            '##DB_PORT' => $config['port'],
            '##DB_USER' => $config['user'],
            '##DB_PASS' => $config['password'],
            '##DB_NAME' => $config['name'],
        ];

        $content = strtr($content, $replacements);

        if (file_put_contents($this->targetFile, $content) === false) {
            throw new RuntimeException('Не удалось записать файл конфигурации базы данных.');
        }
    }

    private function loadTemplate(): string
    {
        if ($this->template && is_file($this->template)) {
            return file_get_contents($this->template) ?: $this->defaultTemplate();
        }

        return $this->defaultTemplate();
    }

    private function defaultTemplate(): string
    {
        return <<<'PHP'
<?php
$host_db = '##DB_HOST';
$port_db = '##DB_PORT';
$users_db = '##DB_USER';
$password_db = '##DB_PASS';
$data_base_name = '##DB_NAME';
PHP;
    }
}
