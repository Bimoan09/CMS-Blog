<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tittle')->unique();
            $table->longText('content');
            $table->text('files')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('tags');
            $table->integer('status');
            $table->integer('view_count');
            $table->date('date_published');
            $table->text('meta_tag_keyword');
            $table->text('meta_tag_description');
            $table->bigInteger('subcategory_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')
                    ->references('id')
                    ->on('sub_categories')->onDelete('cascade');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
