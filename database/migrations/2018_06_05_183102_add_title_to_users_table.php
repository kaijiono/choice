<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('alias')->nullable();                     //ニックネーム
            $table->string('address')->nullable();                    //住所
            $table->string('phone')->nullable();                     //電話番号
            $table->string('line')->nullable();                      //LINE
            $table->string('family_structure')->nullable();          //家族構成
            $table->string('language')->nullable();                 //使用言語
            $table->string('residential_district')->nullable();     //居住地区
            $table->string('birthplace')->nullable();               //出身地
            $table->string('hobby')->nullable();                    //趣味
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
