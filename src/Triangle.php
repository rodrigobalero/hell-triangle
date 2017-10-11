<?php

namespace HellTriangle;

use Exception;

class Triangle{

	private $triangle;

	private $total;


	/**
	*	@return Array $triangle
	**/
	public function __toString(){
		return $triangle;
	}


	/**
	*	@param Array $triangle
	**/
	public function setTriangle(array $triangle){

		$this->validadeTriangle($triangle);

		$this->triangle = $triangle;

	}


	/**
	*	@param Array $triangle
	*	@return $this
	**/
	private function validadeTriangle($triangle){

		for ($i = 0; $i < count($triangle); $i++) {

            if(count($triangle[$i]) <> $i+1){
                throw new \Exception("Invalid triangle format.");
            }

            for ($j = 0; $j < count($triangle[$i]); $j++) {
                if (!is_numeric($triangle[$i][$j])) {
                    throw new \Exception("Invalid triangle, all values should be numeric.");
                }
            }
        }

		return $this;
	}


	/**
	*	@return Int $total
	**/
	public function getPossibleSum(){

		$index = 0;
		$total = 0;

		for ($i = 0; $i < count($this->triangle); $i++) {
			
			if($this->triangle[$i][$index] > @$this->triangle[$i][$index+1]){
				$total += $this->triangle[$i][$index];
			}else{
				$total += $this->triangle[$i][$index+1];
				$index++;
			}
		}

		return $total;

	}

}