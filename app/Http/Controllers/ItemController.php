<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Item as Item;

class ItemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Item::all();
		return \View::make('Item/list_item',compact('items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Item/new_item');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$item = new Item;
		$item->nombre_item = $request->nombre;
		$item->tipo_item = $request->tipo;
		$item->estado_item = $request->estado;
		$item->concepto = $request->concepto;
		$item->save();
		return redirect('item');
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
		$item = Item::find($id);
		return \View::make('Item/update_item',compact('item'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$item=Item::find($request->id);
		$item->nombre_item = $request->nombre_item;
		$item->tipo_item = $request->tipo_item;
		$item->estado_item = $request->estado_item;
		$item->concepto = $request->concepto;
		$item->save();
		return redirect('item');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item=Item::find($id);
		$item->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$items=Item::where('nombre_item','like','%'.$request->nombre.'%')->get();
		return \View::make('Item/list_item',compact('items'));

	}

}
