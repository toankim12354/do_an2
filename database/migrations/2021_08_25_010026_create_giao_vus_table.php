<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoVusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_vus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->date('birthday');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi');
            $table->string('email', 100)->unique();
            $table->string('phone', 11)->nullable()->unique();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('role')->default(0);
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
        Schema::dropIfExists('giao_vus');
    }
}
