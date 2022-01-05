<?php

declare(strict_types=1);

namespace zhang;

class Preferences
{
    private array $props;
    private static Preferences $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        // ATTENTION THE LOGIC
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function addProp(string $key, string $value)
    {
        $this->props[$key] = $value;
    }
    
    public function getProp(string $key)
    {
        return $this->props[$key];
    }
}
