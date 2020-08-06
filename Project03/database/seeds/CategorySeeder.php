<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['General', 'Party', 'Movies', 'Politics', 'Sport', 'Cars'];

        foreach($categories as $category){
            DB::table('categories')->insert(['category' => $category]);
        }
    }
}
