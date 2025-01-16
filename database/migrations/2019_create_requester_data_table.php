<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'requester_data',
            function (Blueprint $table) {
                $table->id();
                $table->string('first_name');
                $table->string('second_name');
                $table->string('title');
                $table->string('mobile_number');
                $table->string('gender');
                $table->foreignId("nationality_id")->constrained('countries');
                $table->integer('weight');
                $table->integer('age');
                $table->foreignId("skin_color_id")->constrained('skin_colors')->cascadeOnDelete();
                $table->foreignId("employment_status_id")->constrained('employment_statuses');
                $table->foreignId("commitment_degree_id")->constrained('commitment_degrees');
                $table->foreignId("tribe_id")->constrained('tribes');
                $table->string('tribe_name');
                $table->boolean('is_smoker');
                $table->foreignId("marital_status_id")->constrained('marital_statuses');
                $table->foreignId("educational_level_id")->constrained('educational_levels');
                $table->foreignId("mariage_type_id")->constrained('mariage_types');
                $table->foreignId("residence_area_id")->constrained('cities');
                $table->string('origin_region');
                $table->boolean('accept_another_nationality')->default(true);
                $table->text('self_information')->nullable();
                $table->string('email');
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('requester_data');
    }
};
