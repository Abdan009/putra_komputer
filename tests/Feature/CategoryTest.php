<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
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
    public function testCreateCategory(){
        $time = new \DateTime('NOW');
        $standard_date = $time->format ( 'Y-m-d H:i:s' );

        $data = [
	        'name'=> 'Monitor',
            'slug'=> 'monitor',
            'icon'=> null,
            'parent_id'=> null,
            'user_id'=>13,
        ];
        
    	$create = Category::create($data);

        $this->assertDatabaseHas('categories', [
            "id"=> 30,
	        'name'=> 'Monitor',
            'slug'=> 'monitor',
            'icon'=> '',
            'parent_id'=> null,
            'user_id'=>13,    
            "created_at"=> $standard_date,
            "updated_at"=> $standard_date
        ]);
    }

    // public function test_destroy(){
    //     $category = Category::destroy(27);
    //     $this->assertDatabaseMissing('categories',[
    //         'id' => 27
    //     ]);
    // }

    // public function testUpdateCategory(){
    //     $time = new \DateTime('NOW');
    //     $standard_date = $time->format ( 'Y-m-d H:i:s' );

        // $data = [
	    //     'name'=> 'Mouse1',
        //     'slug'=> 'mouse1',
        //     'icon'=> null,
        //     'parent_id'=> null,
        //     'user_id'=>13,
        // ];
        
        // $create = Category::create($data);
        
        // $category =Category::find(26);
        // $category->name='Mouse2';
        // $category->slug='mouse2';
        // $category->icon='';
        // $category->parent_id=null;
        // $category->user_id=13;
        // $category->save();

        // $this->assertDatabaseHas('categories', [
        //     "id"=> 26,
	    //     'name'=> 'Mouse2',
        //     'slug'=> 'mouse2',
        //     'icon'=> '',
        //     'parent_id'=> null,
        //     'user_id'=>13,    
        //     "created_at"=> $standard_date,
        //     "updated_at"=> $standard_date
        // ]);
    

}
