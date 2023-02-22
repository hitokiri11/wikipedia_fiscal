<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bot;
use App\Models\UserClient;
use App\Models\Sugerencias;
use App\Http\Controllers\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
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
        $data_user = UserClient::where('id',$id_user)->first();
        try {
            
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


    public function acum_view($id) { 
        try {
            $data_blog = Bot::where('id',$id)->first();
            $data_blog->visto = ($data_blog->visto + 1);
            $data_blog->save();

            return response()->json(['res' => true]);

        } catch (\Throwable $e) {
            return response()->json(['res' => false]);
        }
    } 

    public function changePassword(Request $request) {
    
        $id = $request->id;
        $data_cliente = UserClient::where('id',$id)->first();
        try {   
            $data_cliente->cliente_confirmado = true; 
            $data_cliente->password = Hash::make($request->password);
            $data_cliente->save();
        } catch (\Throwable $e) {
            \Session::flash('error','Ha ocurrido un error, por favor intente más tarde');
            return redirect()->to('/cliente');
        } 
        \Session::flash('primary','La contraseña se ha cambiado de forma exitosa');
        return redirect()->to('/cliente');
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
