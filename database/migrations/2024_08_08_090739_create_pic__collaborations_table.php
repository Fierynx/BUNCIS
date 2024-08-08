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
        Schema::create('pic__collaborations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PicId')->references('id')->on('pics')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('CollaborationId')->references('id')->on('collaborations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pic__collaborations');
    }
};
