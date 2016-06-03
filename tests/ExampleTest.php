<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSameNumber()
    {
        $this->assertEquals(1,1);
    }

    public function testSameString()
    {
        $this->assertEquals("hola","hola");
    }

    public function testDifferentNumber()
    {
        $this->assertNotEquals(1,2);
    }

    public function testDifferentString()
    {
        $this->assertNotEquals("holas","hola");
    }

}
