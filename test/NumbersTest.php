<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Numbers\Numbers;

class Test01Test extends TestCase
{

    public function test01 () {
        $expected = array("0.0000", "0.0000", "1.0000") ;
        $result = (new Numbers())->apply(array(0));
        $this->assertEquals($result, $expected );
    }

    public function test02 () {
        $expected = array("0.0000", "1.0000", "0.0000") ;
        $result = (new Numbers())->apply(array(-4));
        $this->assertEquals($result, $expected );
    }
    
    public function test03 () {
        $expected = array("1.0000", "0.0000", "0.0000") ;
        $result = (new Numbers())->apply(array(10));
        $this->assertEquals($result, $expected );
    }

    public function test04 () {
        $expected = array("0.5000", "0.3333", "0.1667") ;
        $result = (new Numbers())->apply(array(-4, 3, -9, 0, 4, 1));
        $this->assertEquals($result, $expected );
    }

    public function test05 () {
        $expected = array("0.5000","0.3333", "0.1667") ;
        $result = (new Numbers())->apply(array(5, -2, -9, 2, 0, 9));
        $this->assertEquals($result, $expected );
    }

    public function test06 () {
        $expected = array("0.1667","0.1667", "0.6667") ;
        $result = (new Numbers())->apply(array(0, 0, 0, 10, 0, -8));
        $this->assertEquals($result, $expected );
    }

    public function test07 () {
        $expected = array("0.0000", "0.6667", "0.3333") ;
        $result = (new Numbers())->apply(array(-5, -6, -9, -6, 0, 0));
        $this->assertEquals($result, $expected );
    }

    public function test08 () {
        $expected = array("0.5000","0.5000", "0.0000") ;
        $result = (new Numbers())->apply(array(5, 2, 9, -2, -2, -9));
        $this->assertEquals($result, $expected );
    }

    public function test09 () {
        $expected = array("0.3333", "0.3333","0.3333") ;
        $result = (new Numbers())->apply(array(10, 0, -8));
        $this->assertEquals($result, $expected );
    }

}