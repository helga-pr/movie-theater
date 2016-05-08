<?php

namespace App\Core;

use \Lib\Registry;

/**
 * Class Model
 *
 * @package App\Core
 */
class Model
{
    /**
     * @var Registry|null
     */
    protected $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = Registry::getInstance()->get('db');
    }
}
