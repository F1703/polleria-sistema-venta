<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Liquidacion;
use Illuminate\Http\Request;

class LiquidacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$liquidacions = Liquidacion::orderBy('id', 'desc')->paginate(10);

		return view('liquidacions.index', compact('liquidacions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('liquidacions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$liquidacion = new Liquidacion();

		

		$liquidacion->save();

		return redirect()->route('liquidacions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$liquidacion = Liquidacion::findOrFail($id);

		return view('liquidacions.show', compact('liquidacion'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$liquidacion = Liquidacion::findOrFail($id);

		return view('liquidacions.edit', compact('liquidacion'));
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
		$liquidacion = Liquidacion::findOrFail($id);

		

		$liquidacion->save();

		return redirect()->route('liquidacions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$liquidacion = Liquidacion::findOrFail($id);
		$liquidacion->delete();

		return redirect()->route('liquidacions.index')->with('message', 'Item deleted successfully.');
	}

}
