<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model {
  public $timestamps = false;
  protected $fillable = ['nome', 'cpf', 'data_nascimento', 'email', 'telefone'];
}