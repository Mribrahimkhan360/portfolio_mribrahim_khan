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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email', 255)->unique();
            $table->string('mobile')->unique();
            $table->text('address');
            $table->text('profession_type_one');
            $table->text('profession_type_two');
            $table->text('profession_type_three');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
