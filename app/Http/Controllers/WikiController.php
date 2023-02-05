<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wiki;
use App\Http\Controllers\Session;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_wiki = Wiki::orderBy('id','DESC')->get();
        return view('admin.wiki.index', compact(['data_wiki']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wiki.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'        => 'required|max:255|min:10',
            'descripcion'   => 'required',
            'video'         => 'required|max:255|min:10'
        ],
    
            $message = 
                [
                    'required'  =>'el campo es requerido', 
                    'max'       => 'el campo permte hasta 255 carácteres',
                    'min'       => 'el campo  permte mínimo de 10 carácteres'
                ]
        );

        try { 

            $data_wiki = new Wiki();
            $data_wiki->titulo       = $request->titulo;
            $data_wiki->descripcion  = $request->descripcion;
            $data_wiki->video        = $request->video;
            $data_wiki->save(); 

        } catch (\Throwable $e) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/wiki');
        } 

        \Session::flash('success','Se ha registrado el video de forma exitosa');
        return redirect()->to('/admin/wiki');
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
        $data_edit_wiki = Wiki::where('id',$id)->first();
        return view('admin.wiki.edit',compact('data_edit_wiki'));
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
        $request->validate([
            'titulo'        => 'required|max:255|min:10',
            'descripcion'   => 'required',
            'video'         => 'required|max:255|min:10'
        ],
    
            $message = 
                [
                    'required'  =>'el campo es requerido', 
                    'max'       => 'el campo permte hasta 255 carácteres',
                    'min'       => 'el campo  permte mínimo de 10 carácteres'
                ]
        ); 

        $data_wiki = Wiki::where('id',$id)->first();

        try {
            $data_wiki->titulo       = $request->titulo;
            $data_wiki->descripcion  = $request->descripcion;
            $data_wiki->video        = $request->video;
            $data_wiki->save(); 

        } catch (\Throwable $th) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/wiki');
        } 

        \Session::flash('success','Se ha editado el video de forma exitosa');
        return redirect()->to('/admin/wiki');

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
