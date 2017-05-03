<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$compras = Compra::orderBy('id', 'desc')->paginate(10);

		return view('compras.index', compact('compras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('compras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$compra = new Compra();

		

		$compra->save();

		return redirect()->route('compras.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$compra = Compra::findOrFail($id);

		return view('compras.show', compact('compra'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$compra = Compra::findOrFail($id);

		return view('compras.edit', compact('compra'));
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
		$compra = Compra::findOrFail($id);

		

		$compra->save();

		return redirect()->route('compras.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$compra = Compra::findOrFail($id);
		$compra->delete();

		return redirect()->route('compras.index')->with('message', 'Item deleted successfully.');
	}

}
