<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bot;
use App\Http\Controllers\Session;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class BotsController extends Controller
{ 

    function __construct() {
        $this->middleware('permission:bot-list|bot-create|bot-edit|bot-delete', ['only' => ['index','store']]);
        $this->middleware('permission:bot-create', ['only' => ['create','store']]);
        $this->middleware('permission:bot-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:bot-delete', ['only' => ['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $data_bots = Bot::orderBy('id','DESC')->get();

        return view('admin.bots.index', compact(
            ['data_bots']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bots.create');
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
                    'etiqueta'      => 'required',
                    'video'         => 'required|mimes:mp4'
                ],
            
                    $message = 
                        [
                            'required'  =>'el campo es requerido', 
                            'max'       => 'el campo permte hasta 255 carácteres',
                            'min'       => 'el campo  permte mínimo de 10 carácteres'
                        ]
                );

                $file = $request->file('video');
                $file_name = time().'-'.$file->getClientOriginalName();
                $file->move('upload',$file_name);
                
                try { 
                   
                    $data_bot = new Bot();
                    $data_bot->titulo       = $request->titulo;
                    $data_bot->descripcion  = $request->descripcion;
                    $data_bot->datos_bot    = $request->etiqueta;
                    $data_bot->video        = $file_name;
                    $data_bot->user_id     = \Auth::id();
                    $data_bot->created_at   = Carbon::now();
                    $data_bot->save(); 

                } catch (\Throwable $e) {
                    \Session::flash('error','Se ha producido un error, por favor intente más tarde');
                    return redirect()->to('/admin/bots');
                }
                \Session::flash('success','Se ha registrado el bot de forma exitosa');
                return redirect()->to('/admin/bots');
    
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
       $data_edit_bot = Bot::where('id',$id)->first();
       return view('admin.bots.edit',compact('data_edit_bot'));
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
                'etiqueta'      => 'required',
                'video'         => 'required|mimes:mp4'
            ],
        
                $message = 
                    [
                        'required'  =>'el campo es requerido', 
                        'max'       => 'el campo permte hasta 255 carácteres',
                        'min'       => 'el campo  permte mínimo de 10 carácteres'
                    ]
            );

            $data_bot = Bot::where('id',$id)->first(); 

            $file = $request->file('video');
            $file_name = time().'-'.$file->getClientOriginalName();
            $file->move('upload',$file_name);

            try {
                $data_bot->titulo       = $request->titulo;
                $data_bot->descripcion  = $request->descripcion;
                $data_bot->datos_bot    = $request->etiqueta;
                $data_bot->video        = $file_name;
                $data_bot->user_id      = \Auth::id();
                $data_bot->save(); 

            } catch (\Throwable $e) {
                \Session::flash('error','Se ha producido un error, por favor intente más tarde');
                return redirect()->to('/admin/bots');
            } 

            \Session::flash('success','Se ha editado el bot de forma exitosa');
            return redirect()->to('/admin/bots');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            if($data_bot = Bot::where('id',$id)->delete()) { 
                \Session::flash('success','Se ha eliminado el bot de forma exitosa');
                return redirect()->to('/admin/bots');
            } else { 
                \Session::flash('error','Se ha producido un error, por favor intente más tarde');
                return redirect()->to('/admin/bots');
            }
            
        } catch (\Throwable $e) { 
            dd($e);
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/bots');
        }
       
    }
}
