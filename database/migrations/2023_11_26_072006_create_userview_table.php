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
        Schema::create('userview', function (Blueprint $table) {
            $table->id();

            $table->longText('herocarousel');
            $table->string('isEnable')->nullable();
            $table->longText('reservation_tables');
            $table->longText('reservation_events');
            $table->longText('description_about');
            $table->longText('restaurant');
            $table->longText('gazebo');
            $table->longText('pool');
            $table->longText('event_hall');
            $table->longText('package');
            $table->longText('picture_promo');
            $table->longText('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userview');
    }
};
