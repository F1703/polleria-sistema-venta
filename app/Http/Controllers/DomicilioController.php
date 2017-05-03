<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$domicilios = Domicilio::orderBy('id', 'desc')->paginate(10);

		return view('domicilios.index', compact('domicilios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('domicilios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$domicilio = new Domicilio();

		

		$domicilio->save();

		return redirect()->route('domicilios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$domicilio = Domicilio::findOrFail($id);

		return view('domicilios.show', compact('domicilio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$domicilio = Domicilio::findOrFail($id);

		return view('domicilios.edit', compact('domicilio'));
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
		$domicilio = Domicilio::findOrFail($id);

		

		$domicilio->save();

		return redirect()->route('domicilios.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$domicilio = Domicilio::findOrFail($id);
		$domicilio->delete();

		return redirect()->route('domicilios.index')->with('message', 'Item deleted successfully.');
	}

}
