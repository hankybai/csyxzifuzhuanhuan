<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',10);
            $table->tinyInteger('age');
            $table->smallInteger('cz');
            $table->smallInteger('ys');
            $table->smallInteger('tn');
            $table->smallInteger('zl');
            $table->smallInteger('js');
            $table->tinyInteger('type');
            $table->tinyInteger('position');
            $table->smallInteger('skill_id');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
