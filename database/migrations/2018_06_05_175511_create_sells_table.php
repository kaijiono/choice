<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->nullable();                   //売却予定物件数
            $table->string('area')->nullable();                     //売却物件数住所
            $table->string('property_classification')->nullable();  //売却物件区分
            $table->float('land_area')->nullable();                //土地面積
            $table->float('building_area')->nullable();            //建物面積
            $table->float('age')->nullable();                      //築年数
            $table->string('floor_plan')->nullable();               //間取り
            $table->string('desired_time')->nullable();             //希望時期
            $table->integer('nominee_number')->nullable();           //名義人数
            $table->integer('remaining_debt')->nullable();           //合計残債
            $table->string('replace')->nullable();                  //買い換え
            
            
            
            
            
            
            
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
        Schema::dropIfExists('sells');
    }
}
