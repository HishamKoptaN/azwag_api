<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create(
            'mariage_types',
            function (
                Blueprint $table,
            ) {
                $table->id();
                $table->string('type')->unique();
                $table->timestamps();
            },
        );
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'mariage_types',
        );
    }
};
