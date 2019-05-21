<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:29
 */
namespace Tests\Utilities;

class FakeClass
{
    public $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

}