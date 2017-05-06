<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ventum;
use Illuminate\Http\Request;

class VentumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$ventas = Ventum::orderBy('id', 'desc')->paginate(10);
		$ventas->each(function($ventas){
			$ventas->empleado;
			$linea=$ventas->lineaventa;
			$ventas->lineaventa->each(function($linea){
				$linea->producto->categoria;

				$linea->producto->descripcionproducto;
				// $d->lists('id');
				// dd($d);

			});

		});
		// $descrip=$productos->descripcionproducto;
		// $orden = $descrip->sortByDesc('created_at')->paginate(3);
		// $orden->values()->all();
		// dd($orden);
		dd($ventas);
		return view('ventas.index', compact('ventas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ventas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ventum = new Ventum();
		$ventum->fecha=$request->fecha;
		$ventum->monto=$request->monto;
		$empleado_id=\Auth::user()->empleado_id;


		$ventum->save();

		return redirect()->route('ventas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ventum = Ventum::findOrFail($id);

		return view('ventas.show', compact('ventum'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ventum = Ventum::findOrFail($id);

		return view('ventas.edit', compact('ventum'));
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
		$ventum = Ventum::findOrFail($id);



		$ventum->save();

		return redirect()->route('ventas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ventum = Ventum::findOrFail($id);
		$ventum->delete();

		return redirect()->route('ventas.index')->with('message', 'Item deleted successfully.');
	}

}
