<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mon_id');
            $table->unsignedInteger('sinh_vien_id');
            $table->unsignedInteger('lan');
            $table->float('diem');
            $table->string('ghi_chu',255);
            $table->unique(['mon_id', 'sinh_vien_id', 'lan']);
            $table->foreign('mon_id')->references('id')->on('mons');
            $table->foreign('sinh_vien_id')->references('id')->on('sinh_viens');
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
        Schema::dropIfExists('diems');
    }
}
