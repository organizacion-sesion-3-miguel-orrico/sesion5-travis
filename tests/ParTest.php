<?php
use PHPUnit\Framework\TestCase;
require 'Par.php';
class ParTests extends TestCase
{
    private $par;
 
    protected function setUp()
    {
        $this->par = new Par();
    }
 
    protected function tearDown()
    {
        $this->par = NULL;
    }
 
    public function testPar2()
    {
        $result = $this->par->esPar(2);
        $this->assertEquals(true, $result);
    }
    public function testPar3()
    {
        $result = $this->par->esPar(3);
        $this->assertEquals(false, $result);
    }
    public function testPar0()
    {
        $result = $this->par->esPar(0);
        $this->assertEquals(true, $result);
    }
    public function testParNegativo()
    {
        $result = $this->par->esPar(-5);
        $this->assertEquals(false, $result);
    }

}
