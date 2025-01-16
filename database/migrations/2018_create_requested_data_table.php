<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'requested_data',
            function (Blueprint $table) {
                $table->id();
                $table->integer('min_age');
                $table->integer('max_age');
                $table->foreignId("marital_status_id")->constrained('marital_statuses');
                $table->foreignId("residence_area_id")->constrained('cities');
                $table->foreignId("educational_level_id")->constrained('educational_levels');
                $table->foreignId("skin_color_id")->constrained('skin_colors');
                $table->integer('weight');
                $table->text('notes')->nullable();
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('requested_data');
    }
};
