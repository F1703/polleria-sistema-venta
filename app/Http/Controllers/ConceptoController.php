<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Concepto;
use Illuminate\Http\Request;

class ConceptoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$conceptos = Concepto::orderBy('id', 'desc')->paginate(10);

		return view('conceptos.index', compact('conceptos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('conceptos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$concepto = new Concepto();

		

		$concepto->save();

		return redirect()->route('conceptos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$concepto = Concepto::findOrFail($id);

		return view('conceptos.show', compact('concepto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$concepto = Concepto::findOrFail($id);

		return view('conceptos.edit', compact('concepto'));
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
		$concepto = Concepto::findOrFail($id);

		

		$concepto->save();

		return redirect()->route('conceptos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$concepto = Concepto::findOrFail($id);
		$concepto->delete();

		return redirect()->route('conceptos.index')->with('message', 'Item deleted successfully.');
	}

}
