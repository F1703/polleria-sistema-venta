<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proveedor;
use App\Domicilio;
use App\Pai;
use App\Email;

use Illuminate\Http\Request;

class ProveedorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proveedors = Proveedor::orderBy('id', 'desc')->paginate(10);

		return view('proveedors.index')
		->with('proveedors', $proveedors);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pais =Pai::orderBy('id','asc')->lists('pais','id');
		return view('proveedors.create')
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
		$proveedor = new Proveedor();
		$proveedor->nombre= $request->nombre;
		$proveedor->apellido= $request->apellido;
		$proveedor->cuit= $request->cuit;
		$proveedor->save();

		$domicilio = new Domicilio();
		$domicilio->direccion=$request->direccion;
		$domicilio->numero=$request->numero;
		$domicilio->barrio=$request->barrio;
		$domicilio->idlocalidad=$request->idlocalidad;
		$domicilio->save();

		$proveedor->domicilio()->attach($domicilio);

		$email = new Email();
		$email->email= $request->email;
		$email->save();
		$proveedor->email()->attatch($email);

		$telefono = new Telefono();
		$telefono->telefono= $request->telefono;
		$telefono->save();
		$proveedor->telefono()->attach($telefono);


		return redirect()->route('proveedors.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$proveedor = Proveedor::findOrFail($id);

		return view('proveedors.show', compact('proveedor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proveedor = Proveedor::findOrFail($id);

		return view('proveedors.edit', compact('proveedor'));
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
		$proveedor = Proveedor::findOrFail($id);



		$proveedor->save();

		return redirect()->route('proveedors.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proveedor = Proveedor::findOrFail($id);
		$proveedor->delete();

		return redirect()->route('proveedors.index')->with('message', 'Item deleted successfully.');
	}

}
