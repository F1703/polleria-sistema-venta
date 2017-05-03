<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Linea_ventum;
use Illuminate\Http\Request;

class Linea_ventumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$linea_ventas = Linea_ventum::orderBy('id', 'desc')->paginate(10);

		return view('linea_ventas.index', compact('linea_ventas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('linea_ventas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$linea_ventum = new Linea_ventum();

		

		$linea_ventum->save();

		return redirect()->route('linea_ventas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$linea_ventum = Linea_ventum::findOrFail($id);

		return view('linea_ventas.show', compact('linea_ventum'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$linea_ventum = Linea_ventum::findOrFail($id);

		return view('linea_ventas.edit', compact('linea_ventum'));
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
		$linea_ventum = Linea_ventum::findOrFail($id);

		

		$linea_ventum->save();

		return redirect()->route('linea_ventas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$linea_ventum = Linea_ventum::findOrFail($id);
		$linea_ventum->delete();

		return redirect()->route('linea_ventas.index')->with('message', 'Item deleted successfully.');
	}

}
