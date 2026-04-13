<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use Illuminate\Http\Request;

class AjusteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ajuste = Ajuste::first();
        $divisas = file_get_contents(resource_path('js/divisas.json'));
        $divisas = json_decode($divisas, true);
        
        return view('admin.ajustes.index', compact('divisas','ajuste'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'sucursal' => 'required|string|max:255',
            'direccion' => 'required|string',
            'telefonos' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //<- 2Mb
            'imagen_login' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //<- 2Mb
            'email' => 'required|email|max:255',
            'divisa' => 'required|string|max:10',
            'pagina_web' => 'nullable|url|max:255',
        ]);

        $ajuste = new Ajuste();
        $ajuste->nombre = $request->nombre;
        $ajuste->descripcion = $request->descripcion;
        $ajuste->sucursal = $request->sucursal;
        $ajuste->direccion = $request->direccion;
        $ajuste->telefonos = $request->telefonos;
        $ajuste->email = $request->email;
        $ajuste->divisa = $request->divisa;
        $ajuste->pagina_web = $request->pagina_web;
        $ajuste->logo = $request->file('logo')->store('logos', 'public');
        $ajuste->imagen_login = $request->file('imagen_login')->store('imagenes_login', 'public');
        $ajuste->save();

        // return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Ajuste $ajuste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ajuste $ajuste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ajuste $ajuste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ajuste $ajuste)
    {
        //
    }
}
