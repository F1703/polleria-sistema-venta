<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;
use App\Categorium;
use App\Producto_descripcion;
use Illuminate\Http\Request;

class ProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = Producto::orderBy('id', 'asc')->paginate(1000);
		$productos->each(function($productos){
			$productos->categoria;
			// $productos->descripcionproducto;
		});
		// dd($productos);
		return view('productos.index', compact('productos'));
	}



	public function consulta(){
		return  "hola";
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categoria=Categorium::orderBy('id','asc')->lists('categoria','id');
		return view('productos.create')
		->with('categoria', $categoria);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{


		$producto = new Producto();
		$producto->categoria()->associate($request->categoria);
		$producto->descripcion= $request->descripcion;
		$producto->codigo= $request->codigo;
		$producto->stock= $request->stock;
		$producto->stockminimo = $request->stockminimo;
		$producto->tipo= $request->tipo;
		// $producto->descripcionproducto()->associate($desc);
		// $producto->save();
		// dd($producto);

		$desc = new Producto_descripcion();
		$desc->producto()->associate($producto);
		// $desc->producto_id= "3";
		$desc->preciocompra=$request->preciocompra;
		$desc->precioventa=$request->precioventa;
		$desc->vencimiento=$request->vencimiento;
		// $producto->descripcionproducto()->save($producto);
		// $desc->producto()->save($producto);
		// $desc->save();
		dd($desc);

		return redirect()->route('productos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto = Producto::findOrFail($id);

		return view('productos.show', compact('producto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Producto::findOrFail($id);

		return view('productos.edit', compact('producto'));
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
		$producto = Producto::findOrFail($id);



		$producto->save();

		return redirect()->route('productos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Producto::findOrFail($id);
		$producto->delete();

		return redirect()->route('productos.index')->with('message', 'Item deleted successfully.');
	}

}
