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
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subtitle');
            $table->string('email', 255)->unique();
            $table->string('mobile')->unique();
            $table->string('age');
            $table->text('born');
            $table->string('project');
            $table->string('experience');
            $table->string('client');
            $table->text('profession_type_one');
            $table->text('profession_type_two');
            $table->text('profession_type_three');
            $table->text('description');
            $table->text('image');
            $table->text('pdf');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biographies');
    }
};
