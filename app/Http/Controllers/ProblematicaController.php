<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Problematica as Problematica;

class ProblematicaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$problematicas = Problematica::all();
		return \View::make('Problematica/list_problematica',compact('problematicas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make ('Problematica/new_problematica');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$problematica=new Problematica;
		$problematica->nombre_problematica=$request->nombre_problematica;
		$problematica->tipo_problematicca=$request->tipo_problematicca;
		$problematica->estado_problematica=$request->estado_problematica;
		$problematica->problematica=$request->problematica;
		$problematica->save();
		return redirect('problematica');

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
		$problematica = Problematica::find($id);
		return \View::make('Problematica/update_problematica',compact('problematica'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$problematica= Problematica::find($request->id);
		$problematica->nombre_problematica=$request->nombre_problematica;
		$problematica->tipo_problematicca=$request->tipo_problematicca;
		$problematica->estado_problematica=$request->estado_problematica;
		$problematica->problematica=$request->problematica;
		$problematica->save();
		return redirect('problematica');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$problematica= Problematica::find($id);
		$problematica->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$problematicas=Problematica::where('nombre_problematica','like','%'.$request->nombre.'%')->get();
		return \View::make('Problematica/list_problematica',compact('problematicas'));

	}
}
