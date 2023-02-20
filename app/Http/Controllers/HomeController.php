<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\UserClient;
use Illuminate\Support\Carbon;
use App\Models\Bot;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $id_user = \Auth::id(); 
        $data_user_clients  = UserClient::where('status',true)->get(); 
        $cont_client_act    = count($data_user_clients);
        $mes_corriente      = Carbon::now();
        $mes_corriente      = $mes_corriente->format('m');
        $ult_registros      = UserClient::whereMonth('created_at',$mes_corriente)->get();
        $top3_video         = Bot::orderBy('visto','DESC')->limit(3)->get();
        
        try {
            $data_user = User::where('id',$id_user)->first();
            if($data_user->status == false) {
                $data_user->status = true;
                $data_user->save();
            }
        } catch (\Throwable $e) {
            //throw $th;
        }
        return view('home',compact(['cont_client_act','ult_registros','top3_video']));
    }
}
