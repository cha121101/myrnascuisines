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
        Schema::create('audittrails', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('admin_name');
            $table->string('action');
            $table->string('customer_name');
            $table->string('reservation_type');
            $table->timestamp('time_of_action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audittrails');
    }
};
