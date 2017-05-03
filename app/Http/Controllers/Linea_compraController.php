<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Linea_compra;
use Illuminate\Http\Request;

class Linea_compraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$linea_compras = Linea_compra::orderBy('id', 'desc')->paginate(10);

		return view('linea_compras.index', compact('linea_compras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('linea_compras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$linea_compra = new Linea_compra();

		

		$linea_compra->save();

		return redirect()->route('linea_compras.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$linea_compra = Linea_compra::findOrFail($id);

		return view('linea_compras.show', compact('linea_compra'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$linea_compra = Linea_compra::findOrFail($id);

		return view('linea_compras.edit', compact('linea_compra'));
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
		$linea_compra = Linea_compra::findOrFail($id);

		

		$linea_compra->save();

		return redirect()->route('linea_compras.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$linea_compra = Linea_compra::findOrFail($id);
		$linea_compra->delete();

		return redirect()->route('linea_compras.index')->with('message', 'Item deleted successfully.');
	}

}
