<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Provincium;
use App\Pai;
use Illuminate\Http\Request;

class ProvinciumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$provincias = Provincium::orderBy('id', 'desc')->paginate(10);
		// $provincias->each(function($provincias) {
		// 	$provincias->pais;
		// });
		// dd($provincias);

		return view('provincias.index')
			->with('provincias', $provincias);

	}
	public function consulta($idpais){
		// $localidads = Localidad::Search($idpais);
		// $provincias= \DB::table('provincias')
		// ->where('idpais','=',$idpais)->get();
		// dd($provincias);
		// $provincias = Provincium::Search($idpais)->get();
		$provincias=\DB::table('provincias')->where('idpais','=',$idpais)->get();
		// dd($provincias);
		return $provincias;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pais=Pai::all();
		return view('provincias.create')
		->with('pais', $pais);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$provincium = new Provincium();
		// dd($request->all());
		$provincium->descripcion=$request->descripcion;
		$provincium->idpais=$request->idpais;
		$provincium->save();

		return redirect()->route('provincias.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$provincium = Provincium::findOrFail($id);

		return view('provincias.show', compact('provincium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$provincium = Provincium::findOrFail($id);

		return view('provincias.edit', compact('provincium'));
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
		$provincium = Provincium::findOrFail($id);



		$provincium->save();

		return redirect()->route('provincias.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$provincium = Provincium::findOrFail($id);
		$provincium->delete();

		return redirect()->route('provincias.index')->with('message', 'Item deleted successfully.');
	}

}
