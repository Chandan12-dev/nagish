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
        Schema::create('widgetsettings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('site_id');
            $table->foreign('site_id')->references('id')->on('newsites')->onDelete('cascade');
            $table->longText('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('widgetsettings');
    }
};
