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
        Schema::create('towing_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->decimal('lat', 10, 7);
            $table->decimal('lang', 10, 7);
            $table->text('note')->nullable();
            $table->enum('status', ['pending', 'assigned', 'in_progress', 'completed', 'cancelled'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towing_requests');
    }
};
