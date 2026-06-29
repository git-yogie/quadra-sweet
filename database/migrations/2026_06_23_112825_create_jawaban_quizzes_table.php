<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('jawaban_quizzes', function (Blueprint $table) {
        $table->id();
        // Menyimpan ID Siswa yang sedang login
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        
        // Menyimpan nama atribut 'name' dari input HTML (misal: 'fungsi_terbuka1', 'arah1')
        $table->string('name_input'); 
        
        // Menyimpan teks jawaban yang diketik oleh siswa
        $table->text('jawaban_siswa')->nullable(); 
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_quizzes');
    }
};
