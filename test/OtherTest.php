<?php

class OtherTest extends \PHPUnit_Framework_TestCase {

	/** @test **/
	public function test_two_plustwoiqualfour() {
		$res = 2 + 2;
		$this->assertEquals(4, $res);
    }
}