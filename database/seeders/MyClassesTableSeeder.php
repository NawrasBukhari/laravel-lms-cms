<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Programming 1', 'class_type_id' => $ct[2]],
            ['name' => 'Programming 2', 'class_type_id' => $ct[2]],
            ['name' => 'Programming 3', 'class_type_id' => $ct[2]],
            ['name' => 'Ethical Hacking 1', 'class_type_id' => $ct[3]],
            ['name' => 'Ethical Hacking 2', 'class_type_id' => $ct[3]],
            ['name' => 'Ethical Hacking 3', 'class_type_id' => $ct[4]],
            ['name' => 'Social Engineering 1', 'class_type_id' => $ct[4]],
            ['name' => 'Social Engineering 2', 'class_type_id' => $ct[5]],
            ['name' => 'Social Engineering 3', 'class_type_id' => $ct[5]],
            ['name' => 'Social Engineering Pro', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
