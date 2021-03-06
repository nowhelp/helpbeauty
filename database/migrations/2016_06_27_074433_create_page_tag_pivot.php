<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTagPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_tag_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_tag_pivot');
    }
}
