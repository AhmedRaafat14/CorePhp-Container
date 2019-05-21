<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:31
 */
namespace Core\Container\Contracts;

abstract class AbstractDefinition implements DefinitionInterface
{
    /**
     * Arguments
     * @var array
     */
    public $arguments = [];

    /**
     * Add Arguments
     *
     * @param array $args
     */
    public function addArguments(array $args) : void
    {
        $this->arguments = $args;
    }

    /**
     * Has Arguments
     *
     * @return bool
     */
    public function hasArguments() : bool
    {
        return count($this->arguments) > 0;
    }
}
