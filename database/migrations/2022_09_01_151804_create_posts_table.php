<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("title",1000)->description("post title");
            $table->string("guid",500)->description("post slug");
            $table->mediumText("keywords")->description("post keywords for seo");
            $table->text("excerpt")->description("post excerpt");
            $table->longText("content")->description("post content");
            $table->string("thumbnail")->description("post thumbnail");
            $table->softDeletes(); // soft delete
            $table->timestamps(); // created_at and updated_at
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
};
