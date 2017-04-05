<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\Users::class, function (Faker\Generator $faker) {
      $admin=DB::table('users')->where('name','admin')->exists();
        if(!$admin){
            $create_at=$faker->dateTimeBetween('-1 month','+3 days');
              return [
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => bcrypt('admin'), 
                'created_at'=> $create_at,
                'updated_at'=> $create_at,
            ]; 
        }
  
});

$factory->define(App\Model\Catalogues::class, function (Faker\Generator $faker) {
     $admin=DB::table('catalogues')->where('id','1')->exists();
        if(!$admin){
            $create_at=$faker->dateTimeBetween('-1 month','+3 days');
              return [
                  'id' => '1',
               'name' => 'default',
                'created_at'=> $create_at,
                'updated_at'=> $create_at,
            ]; 
        } 
});
$factory->define(App\Model\Posts::class, function (Faker\Generator  $faker) {  
        $admin=DB::table('users')->where('name','admin')->first(); 
        if($admin){
            $id=$admin->id;
            $published_at=$faker->dateTimeBetween('-1 month','+3 days');
            $create_at=$faker->dateTimeBetween('-1 month',$published_at);
             return [
                'title' => $faker->sentence(mt_rand(3,10)), 
                'uid' => $id,
                'catalogue'=>1,
                'subject' => join('\n\n',$faker->paragraphs(mt_rand(3,6))),
                'created_at'=> $create_at,
                'updated_at'=> $create_at,
                'published_at' => $published_at
            ];
        }else{
            return [];
        } 
});

