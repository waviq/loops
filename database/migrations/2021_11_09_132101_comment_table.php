<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('post_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('comment')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropIndex('comments_post_id_index');
        });
        Schema::dropIfExists('comments');
    }
}
