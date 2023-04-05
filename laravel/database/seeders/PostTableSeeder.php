<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\UserTableSeeder;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            "title" => "ねこについて",
            "text" => "ねこは可愛い",
            "user_id" => 1
        ]);
        DB::table('posts')->insert([
            "title" => "犬について",
            "text" => "犬は可愛い",
            "user_id" => 1
        ]);
        DB::table('posts')->insert([
            "title" => "鳥について",
            "text" => "鳥も可愛い",
            "user_id" => 2
        ]);
    }
}

