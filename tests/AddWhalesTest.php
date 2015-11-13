<?php

use App\Whale;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddWhalesTest extends TestCase
{
    
    public function testDatabaseAdd()
    {
        
        Session::start();
        $faker = Faker\Factory::create();
        $data = [
                'identity' => $faker->randomDigit,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'sex' => 'Male',
                'fruit' => $faker->word,
                'hobby' => $faker->word
        ];
       
        $token = ['_token' => csrf_token()];
        $this->call('POST', '/whale', $data+$token);
        
        $this->seeInDatabase('whales', ['identity'=>$data['identity']]);
        
        
    }
}

    