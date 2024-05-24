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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('optional_tag_1')->nullable();
            $table->string('optional_tag_2')->nullable();
            $table->string('optional_tag_3')->nullable();
            $table->timestamps();
            $table->index('id');
            $table->index('optional_tag_1');
            $table->index('optional_tag_2');
            $table->index('optional_tag_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
