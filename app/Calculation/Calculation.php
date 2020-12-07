<?php


namespace App\Calculation;

use App\Calculation\Exceptions\DiveXZeroException;
use App\Calculation\Exceptions\ArryException;

class Calculation
 {
	public function add($a, $b) {
		return $a + $b;
	}
	
	public function addArry($arry = []) {
		if (!is_array($arry)) {
			throw new ArryException();			
		}
		return array_sum($arry);
	}

	public function divide($a, $b) {
		if ($b === 0) {
			throw new DiveXZeroException();			
		}
		return $a / $b;
	}
}