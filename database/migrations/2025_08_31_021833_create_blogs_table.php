<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->text('excerpt')->nullable();
        $table->string('category')->nullable();
        $table->enum('status', ['draft', 'published', 'scheduled'])->default('draft');
        $table->string('featured_image')->nullable();
        $table->text('meta_description')->nullable();
        $table->json('tags')->nullable();
        $table->timestamp('publish_date')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
