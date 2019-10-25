<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurricularComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curricular_components')->insert([
            'code' => rand(8000000, 8999999),
            'name' => Str::random(10),
            'workload' => 60

        ]);
    }
}
