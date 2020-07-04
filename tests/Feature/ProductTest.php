<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Product;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
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
    // public function testCreateCategory(){
    //     $time = new \DateTime('NOW');
    //     $standard_date = $time->format ( 'Y-m-d H:i:s' );

    //     $data = [
	//         'name'=> 'CPU',
    //         'slug'=> 'cpu',
    //     ];
        
    // 	$create = Product::create($data);

    //     $this->assertDatabaseHas('categories', [
    //         "id"=> 3,
	//         'name'=> 'CPU',
    //         'slug'=> 'cpu',
    //         'icon'=> '',
    //         'parent_id'=> null,
    //         'user_id'=>13,    
    //         "created_at"=> $standard_date,
    //         "updated_at"=> $standard_date
    //     ]);
    //  }
    


}
