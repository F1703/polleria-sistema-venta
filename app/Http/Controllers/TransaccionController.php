<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transaccions = Transaccion::orderBy('id', 'desc')->paginate(10);

		return view('transaccions.index', compact('transaccions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('transaccions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$transaccion = new Transaccion();

		

		$transaccion->save();

		return redirect()->route('transaccions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$transaccion = Transaccion::findOrFail($id);

		return view('transaccions.show', compact('transaccion'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transaccion = Transaccion::findOrFail($id);

		return view('transaccions.edit', compact('transaccion'));
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
		$transaccion = Transaccion::findOrFail($id);

		

		$transaccion->save();

		return redirect()->route('transaccions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$transaccion = Transaccion::findOrFail($id);
		$transaccion->delete();

		return redirect()->route('transaccions.index')->with('message', 'Item deleted successfully.');
	}

}
