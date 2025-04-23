<?php

use App\Models\CollegeCourse;
use App\Models\Career;
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
        Schema::create('college_careers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CollegeCourse::class, 'college_courses')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Career::class, 'careers')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_careers');
    }
};
