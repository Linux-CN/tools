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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->comment('category title');
            $table->string('guid', 500)->comment('category slug');
            $table->mediumText('keywords')->comment('category keywords for seo');
            $table->text('description')->comment('category description');
            $table->string('thumbnail')->comment('category thumbnail');
            $table->softDeletes(); // soft delete
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
        Schema::dropIfExists('categories');
    }
};
