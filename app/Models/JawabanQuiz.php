<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanQuiz extends Model
{
    use HasFactory;

    // Tambahkan baris ini
    protected $fillable = ['user_id', 'name_input', 'jawaban_siswa'];
}
