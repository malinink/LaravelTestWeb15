<?php

use App\Whale;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidation()
    {
        Session::start();
        $faker = Faker\Factory::create();
        $data = [
                'identity' => $faker->randomDigit,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'sex' => 'Male',
                'hobby' => $faker->word
        ];
        
        
        $token = ['_token' => csrf_token()];
        
        $this->call('POST', '/whale', $token);
        
        $this->dontSeeInDatabase('whales',['identity'=>$data['identity']]);
    }
}
