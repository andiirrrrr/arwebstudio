<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->foreignId('package_id')->constrained()->cascadeOnDelete();
            $table->decimal('price', 15, 2);
            $table->integer('estimated_days')->nullable();
            $table->integer('page_limit')->nullable();
            $table->integer('revision_limit')->nullable();
            $table->boolean('hosting')->default(false);
            $table->boolean('domain')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();

            $table->index(['service_id', 'package_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_prices');
    }
};