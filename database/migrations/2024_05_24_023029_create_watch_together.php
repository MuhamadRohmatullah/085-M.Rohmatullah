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
        Schema::create('watch_together', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->date('date');
            $table->integer('seat');
            $table->timestamp('time_open');
            $table->integer('like');
            $table->integer('user_id');
            $table->integer('status_id');
            $table->integer('match_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watch_together');
    }
};
