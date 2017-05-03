<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto_descripcion;
use Illuminate\Http\Request;

class Producto_descripcionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$producto_descripcions = Producto_descripcion::orderBy('id', 'desc')->paginate(10);

		return view('producto_descripcions.index', compact('producto_descripcions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('producto_descripcions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$producto_descripcion = new Producto_descripcion();

		

		$producto_descripcion->save();

		return redirect()->route('producto_descripcions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto_descripcion = Producto_descripcion::findOrFail($id);

		return view('producto_descripcions.show', compact('producto_descripcion'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto_descripcion = Producto_descripcion::findOrFail($id);

		return view('producto_descripcions.edit', compact('producto_descripcion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$producto_descripcion = Producto_descripcion::findOrFail($id);

		

		$producto_descripcion->save();

		return redirect()->route('producto_descripcions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto_descripcion = Producto_descripcion::findOrFail($id);
		$producto_descripcion->delete();

		return redirect()->route('producto_descripcions.index')->with('message', 'Item deleted successfully.');
	}

}
