<?php

use App\Whale;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeleteWhaleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseDelete()
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
        $new = Whale::create($data);
        
        $token = ['_token' => csrf_token()];
        
        $this->call('DELETE', '/whale/'.$new->id, $token);
        
        $this->dontSeeInDatabase('whales', ['identity'=>$data['identity']]);
    }
}
