<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');// 是否含有附件
            $table->string('title');
            $table->string('author')->default('');
            $table->text('content')->default('');
            $table->string('keywords')->default('');
            $table->integer('attach')->default(0);// 是否含有附件
            $table->integer('floorid')->default(0);//索引
            $table->timestamps();
            $table->timestamp('published_at')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('threads');
    }
}
