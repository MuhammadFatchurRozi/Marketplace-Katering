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
        Schema::create('c__history_orders', function (Blueprint $table) {
            $table->uuid('id')->primaryKey();
            $table->string('user_id')->constrained()->cascadeOnDelete();
            $table->string('menu_id')->constrained()->cascadeOnDelete();
            $table->date('tanggal_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c__history_orders');
    }
};
