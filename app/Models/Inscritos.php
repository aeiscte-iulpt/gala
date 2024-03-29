<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    use HasFactory;
    protected $table = 'gala';
    protected $fillable = [
        'nome',
        'email',
        'phone',
        'intolerante',
        'is_vegan',
        'aluno'
    ];
}
