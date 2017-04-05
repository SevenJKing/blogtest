<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('uid')->references('id')->on('users'); 
            $table->string('slug')->unique();
            $table->string('title')->null();
            $table->string('author')->default('');
            $table->string('subject')->default('');
            $table->string('keywords')->default('');
            $table->integer('catalogue')->default(1);
            $table->integer('attach')->default(0);// 是否含有附件
            $table->integer('highlight')->default(0);//高亮设置
            $table->timestamp('lastpost');//最后回复时间
            $table->timestamps();
            $table->timestamp('published_at')->index();//正式发布时间
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
