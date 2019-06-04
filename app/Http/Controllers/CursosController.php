<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursosController
{
  public function index()
  {
    // var_dump(Curso::all());
    return Curso::all();
  }

  public function store(Request $request)
  {
    // return response()->json(Curso::create(['nome' => $request->nome]), 201);
    return response()->json(Curso::create($request->all()), 201);
  }

  public function show(int $id)
  {
    $curso = Curso::find($id);
    if(is_null($curso))
      return response()->json('', 204);
    return response()->json($curso, 200);
  }

  public function update(int $id, Request $request)
  {
    $curso = Curso::find($id);
    if(is_null($curso))
      return response()->json(['erro'=>'Curso não encontrado'], 404);
    $curso->fill($request->all());
    $curso->save();
    return $curso;
  }

  public function destroy(int $id)
  {
    $quantCursosRemovidos = Curso::destroy($id);
    if($quantCursosRemovidos == 0)
      return response()->json(['erro'=>'Curso não encontrado'], 404);
    return response()->json(['ok'=>true], 200);
  }
}
