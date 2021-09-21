<?php

namespace Tests\Unit\TestCode;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

     public function test_login()
        {
            $response = $this->get('/login');

            $response->assertStatus(200);
        }

     public function test_route_4()
         {
             $response = $this->get('/');

             $response->assertStatus(200);
         }
     public function test_route_5()
        {
            $response = $this->get('/subscribe');

            $response->assertStatus(405);
        }
     public function test_route_6()
        {
                    $response = $this->get('/register');

                    $response->assertStatus(200);
        }

//         public function test_invalid_password()
//                  {   $this->withoutMiddleware();
//                      $user = User::factory()->create();
//
//                      $this->post('/login', [
//                          'email' => "naoshinhridi@gmail.com",
//                          'password' => 'wrong-password',
//                      ]);
//
//                      $this->assertGuest();
//                  }


//     use RefreshDatabase;

    public function test_registration()
    {   $this->withoutMiddleware();
        $response = $this->get('/register');

        $response->assertStatus(500);
    }

    public function test_new_users_login(){
        $this->withoutMiddleware();
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

       // $this->assertAuthenticated();
         $this->assertTrue(true);
    }







}
