<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cuentum;
use Illuminate\Http\Request;

class CuentumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cuentas = Cuentum::orderBy('id', 'desc')->paginate(10);

		return view('cuentas.index', compact('cuentas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cuentas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cuentum = new Cuentum();

		

		$cuentum->save();

		return redirect()->route('cuentas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cuentum = Cuentum::findOrFail($id);

		return view('cuentas.show', compact('cuentum'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cuentum = Cuentum::findOrFail($id);

		return view('cuentas.edit', compact('cuentum'));
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
		$cuentum = Cuentum::findOrFail($id);

		

		$cuentum->save();

		return redirect()->route('cuentas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cuentum = Cuentum::findOrFail($id);
		$cuentum->delete();

		return redirect()->route('cuentas.index')->with('message', 'Item deleted successfully.');
	}

}
