<?php

namespace App\Api;

/**#@+
 * Interface AbstractDomainRepositoryInterface
 * @package App\Api
 */
interface AbstractDomainRepositoryInterface
{
    /**
     * @param object $object
     * @return mixed
     */
    public function save($object);


    /**
     * @param $object
     * @return mixed
     */
    public function remove($object);

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @return mixed
     */
    public function getAll();
}
