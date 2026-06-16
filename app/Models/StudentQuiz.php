<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuiz extends Model
{
    use HasFactory;

    // Mengizinkan kolom-kolom ini agar bisa diisi data nilai siswa
    protected $fillable = ['user_id', 'quiz_key', 'score'];

    // Relasi balik: Nilai kuis ini milik seorang User (Siswa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}