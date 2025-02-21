<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'educational_levels',
            function (Blueprint $table) {
                $table->id();
                $table->string('level')->unique();
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists(
            'educational_levels',
        );
    }
};
