<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_paragraph');

            $table->string('card_1_title');
            $table->text('card_1_paragraph');

            $table->string('card_2_title');
            $table->text('card_2_paragraph');

            $table->string('card_3_title');
            $table->text('card_3_paragraph');

            $table->string('card_4_title');
            $table->text('card_4_paragraph');

            $table->string('card_5_title');
            $table->text('card_5_paragraph');

            $table->string('card_6_title');
            $table->text('card_6_paragraph');


            $table->string('value_title');
            $table->text('value_paragraph');
            $table->string('value_card_title');
            $table->text('value_card_subtitle');
            $table->string('values_to_gain_1');
            $table->string('values_to_gain_2');
            $table->string('values_to_gain_3');
            $table->string('values_to_gain_4');


            $table->string('small_container_slug');


            $table->string('copyright');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend');
    }
}
