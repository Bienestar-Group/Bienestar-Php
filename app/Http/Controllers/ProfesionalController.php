<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Profesional as Profesional;

class ProfesionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profesionales = Profesional::all();
		return \View::make('Profesional/list_profesional',compact('profesionales'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make ('Profesional/new_profesional');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$profesional=new Profesional;
		$profesional->tipo_documento_profesional=$request->tipo_documento_profesional;
		$profesional->documento_profesional=$request->documento_profesional;
		$profesional->nombre_profesional=$request->nombre_profesional;
		$profesional->primer_apellido_profesional=$request->primer_apellido_profesional;
		$profesional->segundo_apellido_profesional=$request->segundo_apellido_profesional;
		$profesional->telefono_profesional=$request->telefono_profesional;
		$profesional->email_profesional=$request->email_profesional;
		$profesional->direccion_profesional=$request->direccion_profesional;
		$profesional->fecha_nacimiento_profesional=$request->fecha_nacimiento_profesional;
		$profesional->estado_profesional=$request->estado_profesional;
		$profesional->save();
		return redirect('profesional');
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
		$profesional = Profesional::find($id);
		return \View::make('Profesional/update_profesional',compact('profesional'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$profesional= Profesional::find($request->id);
		$profesional->tipo_documento_profesional=$request->tipo_documento_profesional;
		$profesional->documento_profesional=$request->documento_profesional;
		$profesional->nombre_profesional=$request->nombre_profesional;
		$profesional->primer_apellido_profesional=$request->primer_apellido_profesional;
		$profesional->segundo_apellido_profesional=$request->segundo_apellido_profesional;
		$profesional->telefono_profesional=$request->telefono_profesional;
		$profesional->email_profesional=$request->email_profesional;
		$profesional->direccion_profesional=$request->direccion_profesional;
		$profesional->fecha_nacimiento_profesional=$request->fecha_nacimiento_profesional;
		$profesional->estado_profesional=$request->estado_profesional;
		$profesional->save();
		return redirect('profesional');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profesional= Profesional::find($id);
		$profesional->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$profesionales=Area::where('nombre_profesional','like','%'.$request->nombre.'%')->get();
		return \View::make('Profesional/list_profesional',compact('profesionales'));

	}

}
