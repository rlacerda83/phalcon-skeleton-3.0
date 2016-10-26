<?php

namespace Models;

use Phalcon\Mvc\Model;

class Configuration extends Model
{
    const TABLE = 'Models\Configuration';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
    	return (int) $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
    	return (string) $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
    	$this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return (string) $this->value;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->name = $value;
    }

}
