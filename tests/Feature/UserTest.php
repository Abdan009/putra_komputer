<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use DateTime;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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

    // public function testCreateMember1(){
    //     $time = new \DateTime('NOW');
    //     $standard_date = $time->format ( 'Y-m-d H:i:s' );
    //     $user = factory(User::class)->create([
    //         "name"=> "Fajri",
    //             "username"=> "fajri6",
    //             "email"=> "fajri6@fajri.com",
    //             "password"=> bcrypt('111111'),
    //             "address"=> "Majalengka",
    //             "phone"=> "08971613199",
    //             "gender"=> "L",
    //             "status"=> "0",
    //             "birthday"=> "2000-01-05",
    //             "role"=> "member",
    //             "remember_token"=> null,
    //     ]);

    //     $this->assertDatabaseHas('users', [
    //         "id"=> 14,
    //         "name"=> "Fajri",
    //         "photo"=> 'static/dist/img/avatar5.png',
    //         "username"=> "fajri6",
    //         "email"=> "fajri6@fajri.com",
    //         "password"=> bcrypt('111111'),
    //         "address"=> "Majalengka",
    //         "phone"=> "08971613199",
    //         "gender"=> "L",
    //         "status"=> "0",
    //         "birthday"=> "2000-01-05",
    //         "role"=> "member",
    //         "remember_token"=> null,
    //         "created_at"=> $standard_date,
    //         "updated_at"=> $standard_date
    //     ]);
    // }

  
}
