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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('name_ua');
            $table->string('name_en');
            $table->text('description_ua');
            $table->text('description_en');
            $table->string('poster');
            $table->boolean('screenshots')->default(false);
            $table->string('trailer_url');
            $table->year('year')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
