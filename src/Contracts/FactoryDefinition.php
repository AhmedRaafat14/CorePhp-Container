<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:32
 */
namespace Core\Container\Contracts;

use Closure;

class FactoryDefinition extends AbstractDefinition
{
    /**
     * Callback
     * @var Closure
     */
    private $callback;

    /**
     * Constructor
     *
     * @param Closure $callback
     */
    public function __construct(Closure $callback)
    {
        $this->callback = $callback;
    }

    /**
     * Build
     *
     * @return object
     */
    public function build()
    {
        return call_user_func_array($this->callback, $this->arguments);
    }
}
