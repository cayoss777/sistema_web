<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        if($request){

            $sql=trim($request->get('buscarTexto'));
            $categorias=DB::table('categorias')->where('nombre','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(3);
            return view('categoria.index',["categorias"=>$categorias,"buscarTexto"=>$sql]);
            //return $categorias;
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $categoria= new Categoria();
        $categoria->nombre= $request->nombre;
        $categoria->descripcion= $request->descripcion;
        $categoria->condicion= '1';
        $categoria->save();
        return Redirect::to("categoria");
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
    public function update(Request $request)
    {
        //
        $categoria= Categoria::findOrFail($request->id_categoria);
        $categoria->nombre= $request->nombre;
        $categoria->descripcion= $request->descripcion;
        $categoria->condicion= '1';
        $categoria->save();
        return Redirect::to("categoria");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $categoria= Categoria::findOrFail($request->id_categoria);

        if($categoria->condicion=="1"){
            
            $categoria->condicion= '0';
            $categoria->save();
            return Redirect::to("categoria");
    
        } else{

            $categoria->condicion= '1';
            $categoria->save();
            return Redirect::to("categoria");

        }
    }
}
