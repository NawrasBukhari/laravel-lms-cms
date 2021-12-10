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
        Schema::create('frontends', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_paragraph')->nullable();

            $table->string('card_1_title')->nullable();
            $table->text('card_1_paragraph')->nullable();

            $table->string('card_2_title')->nullable();
            $table->text('card_2_paragraph')->nullable();

            $table->string('card_3_title')->nullable();
            $table->text('card_3_paragraph')->nullable();

            $table->string('card_4_title')->nullable();
            $table->text('card_4_paragraph')->nullable();

            $table->string('card_5_title')->nullable();
            $table->text('card_5_paragraph')->nullable();

            $table->string('card_6_title')->nullable();
            $table->text('card_6_paragraph')->nullable();


            $table->string('value_title')->nullable();
            $table->text('value_paragraph')->nullable();
            $table->string('value_card_title')->nullable();
            $table->text('value_card_subtitle')->nullable();
            $table->string('values_to_gain_1')->nullable();
            $table->string('values_to_gain_2')->nullable();
            $table->string('values_to_gain_3')->nullable();
            $table->string('values_to_gain_4')->nullable();


            $table->string('small_container_slug')->nullable();


            $table->string('copyright')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();




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
        Schema::dropIfExists('frontends');
    }
}
