<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:32
 */
namespace Core\Container\Contracts;

use ReflectionClass;

class ClassDefinition extends AbstractDefinition
{
    /**
     * Concrete
     * @var string
     */
    private $concrete;

    /**
     * Constructor
     *
     * @param string $concrete
     */
    public function __construct(string $concrete)
    {
        $this->concrete = $concrete;
    }

    /**
     * Build
     *
     * @return object
     */
    public function build()
    {
        if ($this->hasArguments()) {
            $reflection = new ReflectionClass($this->concrete);

            return $reflection->newInstanceArgs($this->arguments);
        }

        return new $this->concrete;
    }
}
