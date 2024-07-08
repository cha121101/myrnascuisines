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
        Schema::create('reservationtables', function (Blueprint $table) {
            $table->id()->uniqid;
            $table->string('customer_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('phonenumber');
            $table->string('tablenumber');
            $table->date('scheduledate');
            $table->string('scheduletime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservationtables');
    }
};
