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
        Schema::create('boat_prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('boat_id')
                ->constrained()
                ->cascadeOnDelete();
        
            $table->string('period');
        
            $table->decimal('price', 12, 2);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boat_prices');
    }
};
