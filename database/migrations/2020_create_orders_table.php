<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'orders',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId("requester_data_id")->constrained('requester_data');
                $table->foreignId("requested_data_id")->constrained('requested_data');
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
