<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Aluno;

class MatriculasController
{
  public function index()
  {
    return Matricula::all();
  }

  public function store(Request $request)
  {
    return response()->json(Matricula::create($request->all()), 201);
  }

  public function show(int $id)
  {
    $matricula = Matricula::find($id);
    if(is_null($matricula))
      return response()->json('', 204);
    return response()->json($matricula, 200);
  }

  public function update(int $id, Request $request)
  {
    $matricula = Matricula::find($id);
    if(is_null($matricula))
      return response()->json(['erro'=>'Matricula não encontrada'], 404);
    $matricula->fill($request->all());
    $matricula->save();
    return $matricula;
  }

  public function destroy(int $id)
  {
    $quantMatriculasRemovidas = Matricula::destroy($id);
    if($quantMatriculasRemovidas == 0)
      return response()->json(['erro'=>'Matricula não encontrado'], 404);
    return response()->json(['ok'=>true], 200);
  }
}
