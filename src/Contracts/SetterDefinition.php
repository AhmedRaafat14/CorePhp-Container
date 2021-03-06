<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:32
 */
namespace Core\Container\Contracts;

class SetterDefinition extends AbstractDefinition
{
    /**
     * Concrete
     * @var string
     */
    private $concrete;

    /**
     * Methods
     * @var array
     */
    private $methods;

    /**
     * Constructor
     *
     * @param string $concrete
     */
    public function __construct(string $concrete, array $methods)
    {
        $this->concrete = $concrete;
        $this->methods = $methods;
    }

    /**
     * Build
     *
     * @return object
     */
    public function build()
    {
        $concrete = new $this->concrete;

        foreach ($this->methods as $method => $parameter) {
            call_user_func([$concrete, $method], $parameter);
        }

        return $concrete;
    }
}
