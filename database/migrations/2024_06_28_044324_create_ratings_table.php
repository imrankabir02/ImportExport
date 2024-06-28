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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('title', 500);
            $table->string('maincateg')->nullable();
            $table->string('platform');
            $table->decimal('actprice1', 8, 2);
            $table->integer('norating1');
            $table->integer('noreviews1');
            $table->integer('star_5f')->nullable();
            $table->integer('star_4f')->nullable();
            $table->integer('star_3f')->nullable();
            $table->integer('star_2f')->nullable();
            $table->integer('star_1f')->nullable();
            $table->boolean('fulfilled1')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
