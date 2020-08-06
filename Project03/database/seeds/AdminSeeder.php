<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $data = [
            'email'=>'admin@gmail.com',
            'password' =>\Hash::make("admin12345"),
            'username' => 'admin',
            'name' => 'admin',
            'role' => 'admin',
            "email_verified_at" => date('Y-m-d H:i:s'),
            "created_at" => date('Y-m-d H:i:s'), 
        ];
        \DB::table('users')->insert($data);
    }
}
