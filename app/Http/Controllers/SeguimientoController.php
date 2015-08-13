<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seguimiento as Seguimiento;

class SeguimientoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$seguimientos = Seguimiento::all();
		return \View::make('Seguimiento/list_seguimiento',compact('seguimientos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make ('Seguimiento/new_seguimiento');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$seguimiento=new Seguimiento;
		$seguimiento->fecha_inicio=$request->fecha_inicio;
		$seguimiento->estado_seguimiento=$request->estado_seguimiento;
		$seguimiento->aprendiz=$request->aprendiz;
		$seguimiento->save();
		return redirect('seguimiento');
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
		$seguimiento = Seguimiento::find($id);
		return \View::make('Seguimiento/update_seguimiento',compact('seguimiento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$seguimiento= Seguimiento::find($request->id);
		$seguimiento->fecha_inicio=$request->fecha_inicio;
		$seguimiento->estado_seguimiento=$request->estado_seguimiento;
		$seguimiento->aprendiz=$request->aprendiz;
		$seguimiento->save();
		return redirect('seguimiento');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$seguimiento= Seguimiento::find($id);
		$seguimiento->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$seguimientos=Seguimiento::where('aprendiz','like','%'.$request->aprendiz.'%')->get();
		return \View::make('Seguimiento/list_seguimiento',compact('seguimientos'));

	}

}
