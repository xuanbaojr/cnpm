<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('district')->nullable(true);
            $table->string('ward')->nullable(true);
            $table->string('dien_tich')->nullabe(true);
            $table->string('gia_phong')->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
