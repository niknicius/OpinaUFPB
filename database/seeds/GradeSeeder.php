<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'code' => 1,
            'curricular_component_id' => 1,
            'teacher_id' => 1,
        ]);
    }
}
