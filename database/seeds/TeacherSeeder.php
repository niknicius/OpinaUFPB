<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'full_name' => Str::random(12),
            'email' => Str::random(10) . '@gmail.com',
            'nickname' => Str::random(6),
            'photo' => Str::random(60).'.png'
        ]);
    }
}
