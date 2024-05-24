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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users');
            $table->text('image');
            $table->string('title');
            $table->text('content');
            $table->boolean('is_breaking_news')->default(0);
            $table->boolean('show_at_slider')->default(0);
            $table->boolean('show_at_popular')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->index('category_id');
            $table->index('tag_id');
            $table->index('user_id');
            $table->index('is_breaking_news');
            $table->index('show_at_slider');
            $table->index('show_at_popular');
            $table->index('is_approved');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
