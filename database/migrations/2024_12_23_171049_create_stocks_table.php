<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(0);

            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('color_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('size_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};