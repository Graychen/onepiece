<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goods',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->comment('发布者');
            $table->string('name')->comment('商品名词');
            $table->string('pic')->comment('商品图片');
            $table->string('price')->comment('短租价格');
            $table->string('time')->comment('短租时间');
            $table->string('unit')->comment('单位(0:天1:周2:月3:年)')->default(1);
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
        //
        Schema::drop('goods');
    }
}
