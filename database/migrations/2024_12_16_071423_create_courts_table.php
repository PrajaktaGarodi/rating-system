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
        Schema::create('courts', function (Blueprint $table) {
            $table->id();

            $table->string('court_name');
            $table->tinyInteger('vendor_id');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->text('image');
            $table->tinyInteger('role');
            $table->string('food_type');
            $table->string('open_time');
            $table->string('close_time');
            $table->text('menu_img');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courts');
    }
};
