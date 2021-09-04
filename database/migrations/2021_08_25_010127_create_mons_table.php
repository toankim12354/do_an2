<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->date('tg_bat_dau');
            $table->date('tg_bket_thuc');
            $table->unsignedInteger('nganh_id');
            $table->foreign('nganh_id')->references('id')->on('nganhs');
            $table->string('ghi_chu');
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
        Schema::dropIfExists('mons');
    }
}
