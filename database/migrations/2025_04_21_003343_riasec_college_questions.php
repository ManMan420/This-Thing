<?php

use App\Models\riasecCollege;
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
        Schema::create('riasec_college_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(riasecCollege::class, 'riasec_colleges')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Question::class, 'questions')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riasec_college_questions');
    }
};
