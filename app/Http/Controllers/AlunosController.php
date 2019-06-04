<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunosController
{
  public function index()
  {
    return Aluno::all();
  }

  public function store(Request $request)
  {
    return response()->json(Aluno::create($request->all()), 201);
  }

  public function showById(int $id)
  {
    $aluno = Aluno::find($id);
    if(is_null($aluno))
      return response()->json('', 204);
    return response()->json($aluno, 200);
  }

  public function showByCPF(string $cpf)
  {
    $aluno = Aluno::find($cpf);
    if(is_null($aluno))
      return response()->json('', 204);
    return response()->json($aluno, 200);
  }

  public function update(int $id, Request $request)
  {
    $aluno = Aluno::find($id);
    if(is_null($aluno))
      return response()->json(['erro'=>'Aluno não encontrado'], 404);
    $aluno->fill($request->all());
    $aluno->save();
    return $aluno;
  }

  public function destroy(int $id)
  {
    $quantAlunosRemovidos = Aluno::destroy($id);
    if($quantAlunosRemovidos == 0)
      return response()->json(['erro'=>'Aluno não encontrado'], 404);
    return response()->json(['ok'=>true], 200);
  }
}
