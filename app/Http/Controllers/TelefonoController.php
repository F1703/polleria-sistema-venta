<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$telefonos = Telefono::orderBy('id', 'desc')->paginate(10);

		return view('telefonos.index', compact('telefonos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('telefonos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$telefono = new Telefono();

		

		$telefono->save();

		return redirect()->route('telefonos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$telefono = Telefono::findOrFail($id);

		return view('telefonos.show', compact('telefono'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$telefono = Telefono::findOrFail($id);

		return view('telefonos.edit', compact('telefono'));
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
		$telefono = Telefono::findOrFail($id);

		

		$telefono->save();

		return redirect()->route('telefonos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$telefono = Telefono::findOrFail($id);
		$telefono->delete();

		return redirect()->route('telefonos.index')->with('message', 'Item deleted successfully.');
	}

}
