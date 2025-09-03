<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'turmas';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'descricao',
        'ano',
    ];

    /**
     * Get all of the alunos for the Turma
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }
}
