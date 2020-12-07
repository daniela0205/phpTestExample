<?php

use App\Calculation\Calculation;

use App\Calculation\Exceptions\DiveXZeroException;
use App\Calculation\Exceptions\ArryException;

class CalculationTest extends \PHPUnit_Framework_TestCase {


	/** @test **/
	public function test_addtwonumber(){

		$calculation = new Calculation;

		$add = $calculation->add(5, 11);

		$this->assertEquals(16, $add);
	}
	

	/** @test **/
	public function test_method_addArry_work() {
		$calculation = new Calculation;
	
		$add = $calculation->addArry([8, 2, 7, 3]);
	
		$this->assertEquals(20, $add);
	}

		
	/** @test **/
	public function test_expection_work_method_addArry() {
		$this->expectException(ArryException::class);		

		$calculation = new Calculation;
	
		$add = $calculation->addArry(5);

	}

	/** @test **/
	public function test_if_could_divede_twonumber() {
		
		$calculation = new Calculation;

		$division = $calculation->divide(10, 2);

		$this->assertEquals(5, $division);
	}

	
	/** @test **/
	public function test_thefunctio_show_Exception_when_divideZero() {

		$this->expectException(DiveXZeroException::class);

		$calculation = new Calculation;

		$division = $calculation->divide(10, 0);		
	}

}