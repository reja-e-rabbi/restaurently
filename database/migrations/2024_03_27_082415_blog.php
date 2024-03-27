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
        //
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sl')->nullable();
            $table->string('title')->nullable();
            $table->string('summery')->nullable();
            $table->text('detels')->nullable();
            $table->string('img')->nullable();
            $table->string('shows')->nullable();
            $table->text('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('blog');
    }
};
