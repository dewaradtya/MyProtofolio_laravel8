<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('content');
            $table->string('link');
            $table->text('slug');
            $table->boolean('is_active');
            $table->integer('views');
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
        Schema::dropIfExists('projek');
    }
}
