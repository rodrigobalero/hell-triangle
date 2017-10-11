<?php

use PHPUnit\Framework\TestCase;

use HellTriangle\Triangle;

final class EmailTest extends TestCase
{

	/**
     * @expectedExceptionMessage must be of the type array, string given.
     */
    public function testInvalidTriangleType(){
    	$HellTriangle = new Triangle();
        $HellTriangle->setTriangle('String Value');
    }

    /**
     * @expectedExceptionMessage Invalid triangle format.
     */
    public function testInvalidTriangleFormat(){
    	$triangle = [[3,6],[3,5],[9,7,1],[4,8,4]];
        
        $HellTriangle = new Triangle();
        $HellTriangle->setTriangle($triangle);

        $this->assertEquals($triangle, $triangle);
    }

    /**
     * @expectedExceptionMessage Invalid triangle, all values should be numeric.
     */
    public function testInvalidTriangleWithString(){
    	$triangle = [[6],[3,5],[9,7,"i"],[4,6,8,4]];
        
        $HellTriangle = new Triangle();
        $HellTriangle->setTriangle($triangle);

        $this->assertEquals($triangle, $triangle);
    }

    public function testValidTriangleType(){
        
        $triangle = [[6],[3,5],[9,7,1],[4,6,8,4]];
        
        $HellTriangle = new Triangle();
        $HellTriangle->setTriangle($triangle);

        $this->assertEquals($triangle, $triangle);
    }


    public function testValidTriangleSum(){
        
        $triangle = [[6],[3,5],[9,7,1],[4,6,8,4]];
        
        $HellTriangle = new Triangle();
        $HellTriangle->setTriangle($triangle);

        $possibleSum = $HellTriangle->getPossibleSum();

        $this->assertEquals($possibleSum,26);
    }
}
