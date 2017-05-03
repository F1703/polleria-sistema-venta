<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pai;
use Illuminate\Http\Request;

class PaiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pais = Pai::orderBy('id', 'desc')->paginate(10);

		return view('pais.index', compact('pais'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pais.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$pai = new Pai();
		$pai->nombre=$request->nombre;

		$pai->save();

		return redirect()->route('pais.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pai = Pai::findOrFail($id);

		return view('pais.show', compact('pai'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pai = Pai::findOrFail($id);

		return view('pais.edit', compact('pai'));
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
		$pai = Pai::findOrFail($id);
		$pai->nombre=$request->nombre;


		$pai->save();

		return redirect()->route('pais.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pai = Pai::findOrFail($id);
		$pai->delete();

		return redirect()->route('pais.index')->with('message', 'Item deleted successfully.');
	}

}
