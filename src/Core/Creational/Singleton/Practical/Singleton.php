<?php

namespace Core\Creational\Singleton\Practical;

use Exception;

class Singleton {
    protected static array $instance = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __sleep() {
        throw new Exception('Cannot serialize a singleton');

        return [];
    }

    public function __wakeup() {
        throw new Exception('Cannot unserialize a singleton');
    }

    public static function getInstance() {
        $cls = static::class;

        if(!isset(self::$instance[$cls])) {
            self::$instance[$cls] = new static();
        }

        return self::$instance[$cls];
    }
}