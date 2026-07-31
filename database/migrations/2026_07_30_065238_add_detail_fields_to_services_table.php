<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->text('about')->nullable()->after('description');
            $table->text('target_audience')->nullable()->after('about');
            $table->json('key_features')->nullable()->after('target_audience');
            $table->json('workflow')->nullable()->after('key_features');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['about', 'target_audience', 'key_features', 'workflow']);
        });
    }
};