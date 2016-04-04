<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('region');
            $table->integer('price');
            $table->integer('discount');
            $table->boolean('active');
            $table->timestamps();
            $table->timestamp('published_at');
        });

        Schema::create('activity_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->string('Text');
            $table->string('locale')->index();

            $table->unique(['activity_id','locale']);
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_translations');
        Schema::drop('activities');
    }
}
