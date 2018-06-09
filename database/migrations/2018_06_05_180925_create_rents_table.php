<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('income')->nullable();                   //所得
            $table->integer('household_income')->nullable();         //世帯所得
            $table->string('office')->nullable();                   //勤務先
            $table->float('years_service')->nullable();            //勤務年数
            $table->string('car')->nullable();                      //車
            $table->string('area')->nullable();                     //希望エリア
            $table->float('preferred_rent')->nullable();           //希望家賃
            $table->integer('distance')->nullable();                 //希望駅距離
            $table->string('property_classification')->nullable();  //物件区分
            $table->string('floor_plan')->nullable();              //希望間取
        
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
        Schema::dropIfExists('rents');
    }
}
