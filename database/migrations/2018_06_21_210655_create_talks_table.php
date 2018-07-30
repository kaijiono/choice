<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->default(null)->unsigned()->index();
            $table->integer('admin_id')->nullable()->default(null)->unsigned()->index();
            $table->text('comment')->nullable()->default(null);
            $table->boolean('is_user')->default(false);
            $table->timestamps();
            // 外部キー設定
            $table->foreign('user_id')->references('id')->on('users')->increments();
            $table->foreign('admin_id')->references('id')->on('admins');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talks');
    }
}
