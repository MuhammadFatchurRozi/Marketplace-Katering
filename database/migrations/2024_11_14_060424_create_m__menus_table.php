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
        Schema::create('m__menus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id')->constrained()->cascadeOnDelete();
            $table->string('nama');
            $table->string('kategori');
            $table->integer('harga');
            $table->string('icon');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m__menus');
    }
};