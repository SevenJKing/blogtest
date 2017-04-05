<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class CataloguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){ 
        App\Model\Catalogues::truncate();

        factory(App\Model\Catalogues::class)->create();
    }
} 
