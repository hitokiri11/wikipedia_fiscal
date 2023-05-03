<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\UserClient;
use App\Http\Controllers\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:cliente')->except('logout');
    } 

    public function showClienteLoginForm()
    {
        return view('cliente', ['url' => route('cliente'), 'title'=>'Clientes']);
    }

    public function clienteLogin(Request $request)
    {
            $email = $request->email;
            $data_user = UserClient::where('email',$email)->first();
            if(!$data_user){
                \Session::flash('error','El cliente no existe');
                return redirect()->to('/cliente');
            } 

            if($data_user->cliente_confirmado == false) { 
                $id = $data_user->id;
                return view( 'change_password', compact(['id']));
            }
            
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (\Auth::guard('cliente')->attempt($request->only(['email','password']), $request->get('remember'))) { 
                return redirect()->intended('/liberconsultas');
            } else { 
                \Session::flash('error','Usuario y el password no son los correctos');
                return redirect()->to('/cliente');
            }
           
            return back()->withInput($request->only('email', 'remember'));
    }


}
