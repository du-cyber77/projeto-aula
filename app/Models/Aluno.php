<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'matricula',
        'data_nascimento',
        'turma_id',
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
