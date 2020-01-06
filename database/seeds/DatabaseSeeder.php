<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('books')->insert([
            ['title'=>'Lord of the rings',
            'description' => 'L\'histoire d\'un mec fou de bijoux'],

            ['title' =>'Les malheurs de Sophie',
            'description' =>'Trop triste'],

            ['title' =>'L\'histoire de France pour les nuls',
            'description' =>'Historique'],

            ['title' =>'La vie en rose',
            'description' =>'Romantique'],

            ['title' =>'Surf in the USA',
            'description' =>'Sports']
        ]);
    }
}