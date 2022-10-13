<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query = $request->buscar;
            $productos = Producto::where('nombre', 'LIKE', '%' . $query . '%')
                                    ->orderBy('nombre', 'asc')
                                    ->paginate(5);
            // 
            return view('productos.index', compact('productos', 'query'));
        }
        // Obtener todos los registros
        $productos = Producto::orderBy('nombre', 'asc')
                                ->paginate(5);

        // Enviar a la vista
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Solo lo puede hacer el admin
        if(Gate::denies('administrador'))
        {
            // abort(403);
            return redirect()->route('productos.index');
        }
        return view('productos.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        Producto::create($request->all());

        return redirect()->route('productos.index')->with('exito', '¡El registro se ha creado satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto= Producto::findOrFail($id);
        // dd($desarrolladores);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('administrador'))
        {
            // abort(403);
            return redirect()->route('productos.index');
        }

        $producto= Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto= Producto::findOrFail($id);
        // Método 1
        // $proyecto->nombre = $request->nombre;
        // $proyecto->duracion = $request->duracion;
        // $proyecto->save();
        // Método 2
        $producto>update($request->all());

        return redirect()->route('productos.index')->with('exito', '¡El registro se ha modificado satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('administrador'))
        {
            // abort(403);
            return redirect()->route('productos.index');
        }

        $producto= Producto::findOrFail($id);
        $producto>delete();
        return redirect()->route('productos.index');
    }
}
