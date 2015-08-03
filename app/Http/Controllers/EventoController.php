<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Evento as Evento;

class EventoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventos = Evento::all();
		return \View::make('Evento/list_evento',compact('eventos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Evento/new_evento');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$evento = new Evento;
		$evento->nombre_evento = $request->nombre;
		$evento->tipo_evento = $request->tipo;
		$evento->fecha_evento = $request->fecha;
		$evento->hora_inicio_evento = $request->hora_inicio;
		$evento->hora_fin_evento = $request->hora_fin;
		$evento->lugar_evento = $request->lugar;
		$evento->descripcion_evento = $request->descripcion;
		$evento->estado_evento = $request->estado;
		$evento->responsable = $request->responsable;
		$evento->save();
		return redirect('evento');
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
		$evento = Evento::find($id);
		return \View::make('Evento/update_evento',compact('evento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$evento=Evento::find($request->id);
		$evento->nombre_evento = $request->nombre_evento;
		$evento->tipo_evento = $request->tipo_evento;
		$evento->fecha_evento = $request->fecha_evento;
		$evento->hora_inicio_evento = $request->hora_inicio_evento;
		$evento->hora_fin_evento = $request->hora_fin_evento;
		$evento->lugar_evento = $request->lugar_evento;
		$evento->descripcion_evento = $request->descripcion_evento;
		$evento->estado_evento = $request->estado_evento;
		$evento->responsable = $request->responsable;
		$evento->save();
		return redirect('evento');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$evento=Evento::find($id);
		$evento->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$eventos=Evento::where('nombre_evento','like','%'.$request->nombre.'%')->get();
		return \View::make('Evento/list_evento',compact('eventos'));

	}


}
