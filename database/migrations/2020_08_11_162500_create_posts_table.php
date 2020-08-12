<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->text('title');
            $table->text('image');
            $table->text('subtitle');
            $table->text('initial');
            $table->text('done');
            $table->unsignedTinyInteger('is_verified')->default(0);
            $table->unsignedTinyInteger('is_declined')->default(0);
            $table->timestamps();

            $table->index(['user_id', 'status_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
