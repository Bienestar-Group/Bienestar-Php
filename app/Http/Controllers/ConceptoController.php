<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Concepto as Concepto;

class ConceptoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$conceptos = Concepto::all();
		return \View::make('Concepto/list_concepto',compact('conceptos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Concepto/new_concepto');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$concepto = new Concepto;
		$concepto->nombre_concepto = $request->nombre;
		$concepto->estado_concepto = $request->estado;
		$concepto->area = $request->area;
		$concepto->save();
		return redirect('concepto');
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
		$concepto = Concepto::find($id);
		return \View::make('Concepto/update_concepto',compact('concepto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$concepto=Concepto::find($request->id);
		$concepto->nombre_concepto = $request->nombre_concepto;
		$concepto->estado_concepto = $request->estado_concepto;
		$concepto->area = $request->area;
		$concepto->save();
		return redirect('concepto');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$concepto=Concepto::find($id);
		$concepto->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$conceptos=Concepto::where('nombre_concepto','like','%'.$request->nombre.'%')->get();
		return \View::make('Concepto/list_concepto',compact('conceptos'));

	}

}
