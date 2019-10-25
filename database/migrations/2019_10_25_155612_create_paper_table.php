<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paper_name',100)->comment('试卷名');//varchar 255 not null 字符段名name
            $table->tinyInteger('total_score')->default(100)->comment('试卷中分');
            $table->integer('start_time');
            $table->tinyInteger('duration');
            $table->tinyInteger('status')->default(1)->comment('状态 1 启用');
            $table->rememberToken();
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
        Schema::dropIfExists('paper');
    }
}
