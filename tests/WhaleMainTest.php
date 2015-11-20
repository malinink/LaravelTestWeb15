<?php

use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WhaleMainTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApp()
    {
        $response = $this->call('GET', '/whale');
        
        $this->assertEquals(200, $response->status());
    }
}
