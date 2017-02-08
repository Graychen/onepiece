<?php
namespace Tests;
class ExampleTest extends TestCase{
    public function testBasicExample()
    {
        Cache::shouldReceive('get')->with('key')->andReturn('value');
        $this->visit('/cache')->see('value');
    }
}

