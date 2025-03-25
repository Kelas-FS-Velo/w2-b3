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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->enum('resource_type', ['book', 'journal', 'other']);
            $table->string('title');
            $table->string('author');   
            $table->date('publication_date');
            $table->string('isbn')->unique();
            $table->string('publisher')->nullable();
            $table->integer('year')->nullable();
            $table->string('genre')->nullable();
            $table->text('summary')->nullable();
            $table->string('cover_image_url')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }

};
