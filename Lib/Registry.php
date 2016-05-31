<?php

namespace Lib;

/**
 * Class Registry
 */
/**
 * Class Registry
 * @package Lib
 */
class Registry
{
    /**
     * @var Registry
     */
    private static $instance;

    /**
     * @var Registry
     */
    private $registry;

    /**
     * Registry constructor.
     */
    private function __construct()
    {
        //close constructor
    }

    /**
     * @return Registry
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Registry();
        }
        return self::$instance;
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->registry[$key] = $value;
    }

    /**
     * @param mixed $key
     * @return Registry|null
     */
    public function get($key)
    {
        if (isset($this->registry[$key])) {
            return $this->registry[$key];
        }
        return null;
    }

    /**
     * @param mixed $key
     * @return bool
     */
    public function isRegistered($key)
    {
        if (isset($this->registry[$key])) {
            return true;
        }
        return false;
    }
}
