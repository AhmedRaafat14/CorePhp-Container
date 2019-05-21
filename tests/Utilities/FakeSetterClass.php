<?php
/**
 * Created by PhpStorm.
 * User: a.raafat
 * Date: 2019-05-21
 * Time: 20:30
 */

namespace Tests\Utilities;


class FakeSetterClass
{
    public $name;
    public $age;

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setAge(int $age) : void
    {
        $this->age = $age;
    }
}
