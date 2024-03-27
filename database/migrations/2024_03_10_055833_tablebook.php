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
        Schema::create('tablebook', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sl')->nullable();
            $table->tinyText('cname')->nullable();
            $table->tinyText('cemail')->nullable();
            $table->tinyText('cphone')->nullable();
            $table->tinyText('cdate')->nullable();
            $table->tinyText('ctime')->nullable();
            $table->tinyText('cpeople')->nullable();
            $table->text('message')->nullable();
            $table->tinyText('ctable')->nullable();
            $table->tinyText('statuses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablebook');
    }
};
