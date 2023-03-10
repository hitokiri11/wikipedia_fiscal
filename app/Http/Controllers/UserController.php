<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{   

    function __construct() {
        $this->middleware('permission:users-list|users-create|users-edit|users-delete', ['only' => ['index','store']]);
        $this->middleware('permission:users-create', ['only' => ['create','store']]);
        $this->middleware('permission:users-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
   }  
    
    /**users
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request) {
        $data = User::orderBy('id','DESC')->get();
        return view('admin.usuarios.index',compact('data'))
           /*  ->with('i', ($request->input('page', 1) - 1) * 5) */;
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create() {
        $roles = Role::pluck('name','name')->all();
        return view('admin.usuarios.create',compact('roles'));
        /* return view('users.create',compact('roles')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request) {
         $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|same:confirm-password',
             'roles' => 'required'
         ]);
     
         $input = $request->all();
         $input['password'] = Hash::make($input['password']);
     
         $user = User::create($input);
         $user->assignRole($request->input('roles'));
     
         return redirect()->route('users.index')
                         ->with('success','Usuario creado de forma exitosa');
     }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id) {
        $user = User::find($id);
        return view('users.show',compact('user'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id) {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('admin.usuarios.edit',compact('user','roles','userRole'));
        /* return view('users.edit',compact('user','roles','userRole')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','Usuario actualizado de forma exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */ 

     public function destroy(Request $request) { 
        $id = $request->id;
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario eliminado de forma exitosa');
    }


}
