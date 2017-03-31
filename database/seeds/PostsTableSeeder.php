<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){ 
        App\Model\Posts::truncate();

        factory(App\Model\Posts::class,10)->create();
    }
} 
