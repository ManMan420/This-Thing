<?php

use App\Models\riasec;
use App\Models\CollegeCourse;
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
        Schema::create('riasec_colleges', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(riasec::class, 'riasecs')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CollegeCourse::class, 'college_courses')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riasec_colleges');
    }
};
