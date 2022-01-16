<?php

declare(strict_types=1);

namespace zhang\command\extend;

class CommandFactory
{
    public static function getCommand(string $command): ?Command
    {
        $class = __NAMESPACE__ . '\\' . $command . 'Command';
        if (class_exists($class)) {
            return new $class();
        }
        echo $class;
        throw new \Exception('unknown command');
    }
}
