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

    public function testNulls()
    {
        $vacio = null;
        $this->assertEmpty($vacio);
    }
    public function testBoolean()
    {
           $this->assertNotTrue(false);
    }
    public function testArray1()
    {
        $hola = [
            'la' => 1
        ];

        $this->assertArrayHasKey('la',$hola);
    }
    public function testArray2()
    {
        $chau = [
            'la' => 1
        ];

        $this->assertArrayHasKey('la',$chau);
    }

    public function testObject1()
    {
        $x = new stdClass();

        $this->assertObjectNotHasAttribute('la',$x);
    }

    public function testObject2()
    {

        $x = new stdClass();
        $y = new stdClass();

        $this->assertEquals($y,$x);
    }

}
