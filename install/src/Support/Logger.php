<?php
declare(strict_types=1);

namespace Installer\Support;

class Logger
{
    private string $file;

    public function __construct(string $directory)
    {
        if (!is_dir($directory)) {
            mkdir($directory, 0775, true);
        }

        $this->file = rtrim($directory, '/') . '/install.log';
    }

    public function info(string $message): void
    {
        $this->write('INFO', $message);
    }

    public function error(string $message): void
    {
        $this->write('ERROR', $message);
    }

    public function tail(int $lines = 50): string
    {
        if (!is_file($this->file)) {
            return '';
        }

        $content = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
        $slice = array_slice($content, -$lines);

        return implode(PHP_EOL, $slice);
    }

    private function write(string $level, string $message): void
    {
        $line = sprintf('[%s] [%s] %s%s', date('Y-m-d H:i:s'), $level, $message, PHP_EOL);
        file_put_contents($this->file, $line, FILE_APPEND | LOCK_EX);
    }
}
