<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('galleries_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('galleries_id')->references('id')->on('galleries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::table('comments', function (Blueprint $table){
            $table->dropForeign('comments_user_id_foreign');
            $table->dropForeign('comments_galleries_id_foreign');
        });

        Schema::dropIfExists('comments');
    }
}
