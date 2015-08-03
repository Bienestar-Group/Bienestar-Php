<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Taller as Taller;

class TallerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$talleres = Taller::all();
		return \View::make('Taller/list_taller',compact('talleres'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Taller/new_taller');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$taller = new Taller;
		$taller->nombre_taller = $request->nombre;
		$taller->descripcion_taller = $request->descripcion;
		$taller->fecha_inicio_taller = $request->fecha_inicio;
		$taller->fecha_fin_taller = $request->fecha_fin;
		$taller->estado_taller = $request->estado;
		$taller->curso = $request->curso;
		$taller->save();
		return redirect('taller');
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
		$taller = Taller::find($id);
		return \View::make('Taller/update_taller',compact('taller'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$taller=Taller::find($request->id);
		$taller->nombre_taller = $request->nombre_taller;
		$taller->descripcion_taller = $request->descripcion_taller;
		$taller->fecha_inicio_taller = $request->fecha_inicio_taller;
		$taller->fecha_fin_taller = $request->fecha_fin_taller;
		$taller->estado_taller = $request->estado_taller;
		$taller->curso = $request->curso;
		$taller->save();
		return redirect('taller');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$taller=Taller::find($id);
		$taller->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$talleres=Taller::where('nombre_taller','like','%'.$request->nombre.'%')->get();
		return \View::make('Taller/list_taller',compact('talleres'));

	}

}
