<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bot;
use App\Models\UserClient;
use App\Models\Sugerencias;
use App\Http\Controllers\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;

class LiberfyConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $id_user = \Auth::id(); 
        $res = null;
        $flag= false;

        try {
            $data_user = UserClient::where('id',$id_user)->first();
            if($data_user->status == false) {
                $data_user->status = true;
                $data_user->save();
            }
            if($request->search) {
                $consulta = $request->consulta;
                $res = Bot::where('titulo','ilike','%'.$consulta.'%')
                        ->orWhere('descripcion','ilike','%'.$consulta.'%')
                        ->orWhere('datos_bot','ilike','%'.$consulta.'%')
                        ->get();
                $flag = true;
                
            } 
        } catch (\Throwable $th) {
            //throw $th;
        }

        
        
        return view( 'liberconsultas',compact(['res','flag']) );
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
        $request->validate([
            'sugerencia'    => 'required',
        ],
    
            $message = 
            [
                    'required'  =>'El campo sugerencia es requerido'
            ]
        );
       
        try {
            $data_sugerencia = new Sugerencias();
            $data_sugerencia->sugerencia        = $request->sugerencia;
            $data_sugerencia->user_client_id    = \Auth::id();
            $data_sugerencia->created_at        = Carbon::now();
            $data_sugerencia->save();
        } catch (\Throwable $e) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/liberconsultas');
        }

        \Session::flash('success','Se ha registrado la sugerencia de forma exitosa');
        return redirect()->to('/liberconsultas');
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
