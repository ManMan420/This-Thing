<?php

use App\Models\CollegeCareer;
use App\Models\Question;
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
        Schema::create('college_career_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CollegeCareer::class, 'college_careers')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Question::class, 'questions')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_career_questions');
    }
};
