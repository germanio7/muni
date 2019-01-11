<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

use App\Reclamo;

class ReclamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('reclamos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $foto = 'img/reclamos/foto.png';

        $atr = request()->validate([
            'titulo'=>'required|min:6|max:190',
            'descripcion'=>'required|min:6|max:190',
            'direccion'=>'required|min:6|max:190',
            'foto'=>'mimes:jpeg,png,jpg|required',
            'coordenadas'=>'required',
            'categoria_id'=>'required',
        ]);

        $atr['estado_id']=1;
        $atr['user_id']=\Auth::user()->id;
        $atr['foto']=$foto;

        Reclamo::create($atr);

        return view('reclamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
