<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'kkm_quiz1',
        'kkm_quiz2',
        'kkm_quiz3',
        'kkm_evaluasi'
    ];
}