<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Information Technology', 'code' => 'IT'],
            ['name' => 'Cybersecurity', 'code' => 'ISS'],
            ['name' => 'Automation Control', 'code' => 'AUC'],
            ['name' => 'Instruments Design', 'code' => 'ID'],
            ['name' => 'Radio Engineering', 'code' => 'RE'],
            ['name' => 'Power Engineering', 'code' => 'PE'],
        ];

        DB::table('class_types')->insert($data);

    }
}
