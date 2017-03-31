<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){ 
        $admin=DB::table('users')->where('name','admin')->exists();
        if(!$admin){
            DB::table('users')->insert([
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => bcrypt('admin'),
           ]);
        }
    }
} 
