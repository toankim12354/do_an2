<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->date('birthday');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi');
            $table->string('email')->unique();
            $table->string('phone', 11)->nullable()->unique();
            $table->string('ghi_chu');
            $table->unsignedInteger('lop_id');
            $table->foreign('lop_id')->references('id')->on('lops');
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
        Schema::dropIfExists('sinh_viens');
    }
}
