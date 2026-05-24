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
        Schema::create('boat_technical_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('boat_id')
                ->unique()
                ->constrained()
                ->cascadeOnDelete();
        
            $table->integer('onboard_capacity')->nullable();
        
            $table->integer('cabins')->nullable();
        
            $table->integer('sleeping_capacity')->nullable();
        
            $table->integer('bathrooms')->nullable();
        
            $table->year('year_built')->nullable();
        
            $table->enum('length_type', [
                'feet',
                'meter'
            ])->default('feet');
        
            $table->decimal('length', 10, 2)->nullable();
        
            $table->decimal('consumption', 10, 2)->nullable();
        
            $table->decimal('speed', 10, 2)->nullable();
        
            $table->integer('crew')->nullable();
        
            $table->string('engine')->nullable();
        
            $table->boolean('tender')->default(false);
        
            $table->integer('cancellation_policy')->nullable();
        
            $table->enum('fuel_cost', [
                'Included',
                'Excluded'
            ])->nullable();
        
            $table->boolean('captain')->default(false);
        
            $table->time('check_in')->nullable();
        
            $table->time('check_out')->nullable();
        
            $table->decimal('security_deposit', 12, 2)->nullable();
        
            $table->string('insurance_document')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boat_technical_details');
    }
};
