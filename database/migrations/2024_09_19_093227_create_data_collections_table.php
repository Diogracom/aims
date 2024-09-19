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
        Schema::create('data_collections', function (Blueprint $table) {
            $table->id();  
            $table->tinyInteger('month_id')->constrained('months')->onDelete('cascade');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade'); 
            $table->decimal('data_ugx', 15, 2)->nullable(); 
            $table->decimal('data_usd', 15, 2)->nullable(); 
            $table->decimal('data_percent', 5, 2)->nullable(); 
            $table->decimal('data_figure', 15, 2)->nullable(); 
            $table->decimal('data_computed', 15, 2)->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_collections');
    }
};
