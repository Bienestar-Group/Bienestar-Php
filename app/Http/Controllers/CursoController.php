<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Curso as Curso;


class CursoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos = Curso::all();
		return \View::make('Curso/list_curso',compact('cursos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Curso/new_curso');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$curso = new Curso;
		$curso->nombre_curso = $request->nombre;
		$curso->descripcion_curso = $request->descripcion;
		$curso->modalidad_curso = $request->modalidad;
		$curso->fecha_inicio_curso = $request->fecha_inicio;
		$curso->fecha_fin_curso = $request->fecha_fin;
		$curso->estado_curso = $request->estado;
		$curso->profesional = $request->profesional;
		$curso->save();
		return redirect('curso');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$curso = Curso::find($id);
		return \View::make('Curso/update_curso',compact('curso'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$curso=Curso::find($request->id);
		$curso->nombre_curso = $request->nombre_curso;
		$curso->descripcion_curso = $request->descripcion_curso;
		$curso->modalidad_curso = $request->modalidad_curso;
		$curso->fecha_inicio_curso = $request->fecha_inicio_curso;
		$curso->fecha_fin_curso = $request->fecha_fin_curso;
		$curso->estado_curso = $request->estado_curso;
		$curso->profesional = $request->profesional;
		$curso->save();
		return redirect('curso');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$curso=Curso::find($id);
		$curso->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$cursos=Curso::where('nombre_curso','like','%'.$request->nombre.'%')->get();
		return \View::make('Curso/list_curso',compact('cursos'));

	}

}
