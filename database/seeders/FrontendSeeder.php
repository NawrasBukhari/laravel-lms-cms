<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frontends')->delete();
        $frontend_data = [
            ['hero_title' => 'Welcome to AUPET Portal'],
            ['hero_paragraph' => 'Our Portal works on all devices, so you only have to set it up once, and get beautiful results forever.'],
            ['card_1_title' => 'Be Productive'],
            ['card_1_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['card_2_title' => 'Be Productive'],
            ['card_2_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['card_3_title' => 'Be Productive'],
            ['card_3_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['card_4_title' => 'Be Productive'],
            ['card_4_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['card_5_title' => 'Be Productive'],
            ['card_5_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['card_6_title' => 'Be Productive'],
            ['card_6_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero nisi, elementum ac ex faucibus, ultricies placerat lacus.'],
            ['value_title' =>'Unlimited for all'],
            ['value_paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['value_card_title'=>'Education Value'],
            ['value_card_subtitle' => 'What you will get'],
            ['values_to_gain_1' => 'Lorem ipsum dolor sit nisi'],
            ['values_to_gain_2' => 'Lorem ipsum dolor sit nisi'],
            ['values_to_gain_3' => 'Lorem ipsum dolor sit nisi'],
            ['values_to_gain_4' => 'Lorem ipsum dolor sit nisi'],
            ['small_container_slug'=>'Wanna more?'],
            ['copyright'=>'All rights reserved for Lorem Loremovich'],
            ['facebook' => 'https://facebook.com/nawras.2000'],
            ['twitter'=>'https://facebook.com/nawras.2000'],
            ['google'=>'https://facebook.com/nawras.2000'],
        ];
        DB::table('frontends')->insert($frontend_data);
    }
}
