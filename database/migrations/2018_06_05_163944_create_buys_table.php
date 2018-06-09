<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('income')->nullable();            //年収
            $table->integer('household_income')->nullable();  //世帯年収
            $table->string('office')->nullable();            //勤務先
            $table->float('service_years')->nullable();     //勤続年数
            $table->integer('debt')->nullable();              //借入
            $table->string('car')->nullable();               //車
            $table->integer('savings')->nullable();           //自己資金
            $table->string('floor_plan')->nullable();        //間取り
            $table->string('area')->nullable();              //エリア
            $table->integer('budget')->nullable();            //予算
            $table->integer('distance')->nullable();          //駅距離
            $table->integer('repayment_amount')->nullable();  //希望返済額（月々）
            $table->string('property_classification');  //物件区分
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
        Schema::dropIfExists('buys');
    }
}
