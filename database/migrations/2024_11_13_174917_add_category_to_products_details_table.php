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
        Schema::table('products__details', function (Blueprint $table) {
            $table->string('category', 50)->nullable(); // إضافة حقل category
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products__details', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
