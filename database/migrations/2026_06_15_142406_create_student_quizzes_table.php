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
        Schema::create('student_quizzes', function (Blueprint $table) {
            $table->id();
            // Menghubungkan id siswa dari tabel users ke tabel nilai ini
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            // Menyimpan identitas kuis ('karakteristik', 'rekonstruksi', 'masalah', atau 'evaluasi')
            $table->string('quiz_key'); 
            // Menyimpan skor nilai murni siswa (misal: 90)
            $table->integer('score'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_quizzes');
    }
};
