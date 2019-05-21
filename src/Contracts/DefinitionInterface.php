<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:32
 */
namespace Core\Container\Contracts;

interface DefinitionInterface
{
    /**
     * Build
     *
     * @return object
     */
    public function build();
}