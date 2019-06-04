<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {
  public $timestamps = false;
  protected $fillable = ['data_matricula', 'status', 'aluno_id', 'curso_id'];
}