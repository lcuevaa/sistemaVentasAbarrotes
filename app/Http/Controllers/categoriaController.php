<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Exception;
use App\Models\Caracteristica;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Cada vez que llamemos al index nos retorne la vista categoria.index
        return view('categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request) //Se usa el store categoria request
    {
        //Se usa para guardar la información que viene desde el formulario
        // dd($request); sirve para ver los parametros de la información que se esta pasando en el formulario del categoria_create
        try {
            DB::beginTransaction();
            $caracteristica = Caracteristica::create($request->validated());
            $caracteristica->categoria()->create([
                'caracteristica' => $caracteristica->id
            ]);
            // Permite registrar la caracteristica_id de la tabla característica a la tabla de categorias
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            // En caso de existir alguna excepción no se va a hacer el registro 
            //en la base de datos
        }
        return redirect()->route('categorias.index')->with('success', 'Categoria Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
