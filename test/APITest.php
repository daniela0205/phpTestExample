<?php

class APITest extends \PHPUnit_Framework_TestCase {

    /** @test **/
	public function test_required_resource_endpoint_get () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

		$data = json_decode($res->getBody(), true);

		$this->assertArrayHasKey('userId', $data);
		$this->assertArrayHasKey('title', $data);
    }
    
    /** @test **/
	public function test_create_resource_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://jsonplaceholder.typicode.com/posts', [
			"userId" => 1,
			"title" => "my title",
			"body"=> "my content"
		]);

		$data = json_decode($res->getBody(), true);		

		$this->assertEquals(201, $res->getStatusCode());
        $this->assertEquals(101, $data['id']);
    }
    
    
	/** @test **/
	public function test_delete_resource_endpoint_delete () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('DELETE', 'https://jsonplaceholder.typicode.com/posts/1');

		$this->assertEquals(200, $res->getStatusCode());
    }

    /** @test **/
	public function test_update_resource_endpoint_put () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('PATCH', 'https://jsonplaceholder.typicode.com/posts/1', [			
			"title" => "my title update"			
		]);

		$data = json_decode($res->getBody(), true);			

		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['id']);
	}
    


}