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
 
    public function testPar()
    {
        $result = $this->par->esPar(2);
        $this->assertEquals(true, $result);
    }

}
