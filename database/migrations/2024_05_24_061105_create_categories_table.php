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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('show_at_nav');
            $table->boolean('status');
            $table->timestamps();
            $table->index('show_at_nav');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

// Some of the categories of a news Paper
// -Politics
// - Business/Economy
// - Technology
// - Entertainment
// - Sports
// - World
// - Lifestyle
// - Health
// - Science
// - Opinion/Editorials