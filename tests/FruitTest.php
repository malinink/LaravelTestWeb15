<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FruitTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * Test index page returns 200 code.
     *
     * @return void
     */
    public function testIndexRequst()
    {
        $response = $this->call('GET', '/fruits');
        
        $this->assertEquals(200, $response->status());
    }
    
    /**
     * Test create page contains a link to main page.
     *
     * @return void
     */
    public function testStoreButton()
    {
        $this->visit('/fruits/create')
            ->see('localhost/fruits'); // почему это работает?)
    }
    
    /**
     * Test incorrectly completed form returns error
     * and object isn't added to database.
     *
     * @return void
     */
    public function testWrongValidation()
    {
        Session::start();
        $fruit1 = factory(App\Fruit::class)->make(['identity' => '0.5']);
        $form = [
            'identity' => $fruit1->identity,
            'name' => $fruit1->name,
            'color' => $fruit1->color,
            'weight' => $fruit1->weight,
            'price' => $fruit1->price
        ];  // почему тут не работает $form = compact($fruit1) ?
        $param = ['_token' => csrf_token()];
        $this->action('POST', 'Fruits@store', $form+$param);
        $this->assertSessionHasErrors();
        $this->dontSeeInDatabase('fruits', $form);
    }
    
    /**
     * Test correctly completed form adds object to database.
     *
     * @return void
     */
    public function testTrueValidation()
    {
        $fruit1 = factory(App\Fruit::class)->make();
        $form = [
            'identity' => $fruit1->identity,
            'name' => $fruit1->name,
            'color' => $fruit1->color,
            'weight' => $fruit1->weight,
            'price' => $fruit1->price
        ];
        $this->visit('/fruits/create')
            ->submitForm('Create', $form)
            ->seeInDatabase('fruits', $form);
    }
    
    /**
     * Test destroy button deletes object from database.
     *
     * @return void
     */
    public function testDestroyButton()
    {
        Session::start();
        $fruit = factory(App\Fruit::class)->create();
        $param = ['_token' => csrf_token()];
        $this->seeInDatabase('fruits', ['identity' => $fruit->identity]);
        $id = \App\Fruit::whereIdentity($fruit['identity'])->first()->id;
        $this->action('DELETE', 'Fruits@destroy', ['id' => $id]+$param);
        $this->dontSeeInDatabase('fruits', ['identity' => $fruit->identity]);
    }
}
