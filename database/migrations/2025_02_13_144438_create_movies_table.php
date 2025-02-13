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
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('movie_id')->primary();
            $table->string('title');
            $table->date('release_date');
            $table->string('web');
            $table->integer('minutes');
            $table->integer('producer_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('producer_id')->references('producer_id')->on('producers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
