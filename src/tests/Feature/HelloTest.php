<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
        // $response = $this->get('/');

        // $response->assertStatus(200);
    // }


    public function testHello()
    {
        User::factory()->create([
            'name'=>'hide32',
            'email'=>'hide32.a@gmail.com',
            'password'=>'hide0411'
        ]);
        $this->assertDatabaseHas('users',[
            'name'=>'hide32',
            'email'=>'hide32.a@gmail.com',
            'password'=>'hide0411'
        ]);
    }
}
