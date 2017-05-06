<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Domicilio;
use App\Localidad;

use App\Cliente;
use App\Pai;
use App\Email;
use App\Telefono;
use Illuminate\Http\Request;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::orderBy('id', 'desc')->paginate(10);
		$clientes->each(function($clientes){
			$clientes->domicilio->localidad->provincia->pais;
		});
		// dd($clientes);
		return view('clientes.index', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pais =Pai::orderBy('id','asc')->lists('pais','id');
		return view('clientes.create')
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


		$l = Localidad::find($request->localidad_id);
		$domicilio=new Domicilio();
		$domicilio->direccion=$request->direccion;
		$domicilio->numero=$request->numero;
		$domicilio->barrio=$request->barrio;
		$domicilio->localidad()->associate($l);
		$domicilio->save();
		// dd($request->all());
		$cliente = new Cliente();
		$cliente->nombre=$request->nombre;
		$cliente->apellido=$request->apellido;
		$cliente->dni=$request->dni;
		$cliente->domicilio()->associate($domicilio);
		$cliente->save();
		// dd($cliente);

		return redirect()->route('clientes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cliente = Cliente::findOrFail($id);

		return view('clientes.show', compact('cliente'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::findOrFail($id);

		return view('clientes.edit', compact('cliente'));
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
		$cliente = Cliente::findOrFail($id);



		$cliente->save();

		return redirect()->route('clientes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::findOrFail($id);
		$cliente->delete();

		return redirect()->route('clientes.index')->with('message', 'Item deleted successfully.');
	}

}
