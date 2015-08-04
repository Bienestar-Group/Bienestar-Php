<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Area as Area;

class AreaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$areas = Area::all();
		return \View::make('Area/list_area',compact('areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make ('Area/new_area');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$area=new Area;
		$area->create ($request->all());
		return redirect('area');
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
		$area = Area::find($id);
		return \View::make('Area/update_area',compact('area'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$area= Area::find($request->id);
		$area->codigo_area=$request->codigo_area;
		$area->nombre_area=$request->nombre_area;
		$area->descripcion_area=$request->descripcion_area;
		$area->estado_area=$request->estado_area;
		$area->save();
		return redirect('area');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$area= Area::find($id);
		$area->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$areas=Area::where('nombre_area','like','%'.$request->nombre.'%')->get();
		return \View::make('Area/list_area',compact('areas'));

	}

}
