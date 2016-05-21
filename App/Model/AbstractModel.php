<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 17:09
 */

namespace App\Model;

/**
 * Class AbstractModel
 * @package App\Model
 */
class AbstractModel
{
    /**
     * Object attributes
     *
     * @var array
     */
    protected $_data = [];

    /**
     * @param $key
     * @param null $value
     * @return $this
     */
    public function setData($key, $value = null)
    {
        if ($key === (array)$key) {
            $this->_data = $key;
        } else {
            $this->_data[$key] = $value;
        }
        return $this;
    }

    /**
     * Get value from _data array without parse key
     *
     * @param   string $key
     * @return  mixed
     */
    protected function getData($key)
    {
        if (isset($this->_data[$key])) {
            return $this->_data[$key];
        }
        return null;
    }
}
