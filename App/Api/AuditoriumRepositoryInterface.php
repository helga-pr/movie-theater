<?php

namespace App\Api;

/**
 * Interface AuditoriumRepositoryInterface
 * @package App\Api
 */
interface AuditoriumRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $name
     * @return mixed
     */
    public function getByName($name);
}
