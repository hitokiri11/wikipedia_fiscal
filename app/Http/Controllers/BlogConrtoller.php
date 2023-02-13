<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\Session;
use Carbon\Carbon;
use SevenShores\Hubspot\Endpoints\Blogs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class BlogConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::join('users','users.id','blogs.user_id')->orderBy('blogs.created_at','DESC')->get();
        
        return view('admin.blogs.index', compact(
            ['blogs']));
    }

    public function index_blog() {
        $blogs = Blog::select(
            'blogs.id',
            'blogs.titulo',
            'blogs.contenido',
            'blogs.img',
            'blogs.created_at',
            'users.name'
        )
        ->join('users','users.id','blogs.user_id')
        ->orderBy('blogs.created_at','DESC')
        ->paginate(5);
     
        return view('blog', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('upload')) { 
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/'. $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url ]);
        } 

        $request->validate([
            'titulo'        => 'required|max:255|min:10',
            'contenido'   => 'required',
            'img'         => 'required|mimes:jpg,jpeg,png'
        ],
    
            $message = 
                [
                    'required'  =>'el campo es requerido', 
                    'max'       => 'el campo permte hasta 255 carácteres',
                    'min'       => 'el campo  permte mínimo de 10 carácteres'
                ]
        );

        $file = $request->file('img');
        $file_name = time().'-'.$file->getClientOriginalName();
        $file->move('upload_img_blog',$file_name);

        try {
            $data_blog = new Blog();
            $data_blog->titulo      = $request->titulo;
            $data_blog->contenido   = $request->contenido;
            $data_blog->img         = $file_name;
            $data_blog->user_id     = \Auth::id();
            $data_blog->created_at  = Carbon::now();
            $data_blog->save();
        } catch (\Throwable $e) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/admin_blogs');
        }

        \Session::flash('success','Se ha registrado el blog de forma exitosa');
            return redirect()->to('/admin/admin_blogs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::select(
            'blogs.id',
            'blogs.titulo',
            'blogs.contenido',
            'blogs.img',
            'blogs.created_at',
            'users.name'
        )
        ->join('users','users.id','blogs.user_id')
        ->where('blogs.id',$id)
        ->first();
     
        return view('blogs_show',compact(['blog']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data_edit_blog = Blog::where('id',$id)->first();
     
       return view('admin.blogs.edit',compact(['data_edit_blog']));
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
        if($request->hasFile('upload')) { 
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/'. $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url ]);
        } 

        $request->validate([
            'titulo'        => 'required|max:255|min:10',
            'contenido'   => 'required',
            'img'         => 'required|mimes:jpg,jpeg,png'
        ],
    
            $message = 
                [
                    'required'  =>'el campo es requerido', 
                    'max'       => 'el campo permte hasta 255 carácteres',
                    'min'       => 'el campo  permte mínimo de 10 carácteres'
                ]
        );

        $file = $request->file('img');
        $file_name = time().'-'.$file->getClientOriginalName();
        $file->move('upload_img_blog',$file_name); 

        $data_blog = Blog::where('id',$id)->first();

        try {
            $data_blog->titulo      = $request->titulo;
            $data_blog->contenido   = $request->contenido;
            $data_blog->img         = $file_name;
            $data_blog->user_id     = \Auth::id();
            $data_blog->created_at  = Carbon::now();
            $data_blog->save();
        } catch (\Throwable $e) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/admin_blogs');
        }

        \Session::flash('success','Se ha registrado el blog de forma exitosa');
            return redirect()->to('/admin/admin_blogs');

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

            if($data_blog = Blog::where('id',$id)->delete()) {
                \Session::flash('success','Se ha eliminado el blog de forma exitosa');
                return redirect()->to('/admin/admin_blogs');
            } else {
                \Session::flash('error','Se ha producido un error, por favor intente más tarde');
                return redirect()->to('/admin/admin_blogs');
            }
            
        } catch (\Throwable $e) {
            \Session::flash('error','Se ha producido un error, por favor intente más tarde');
            return redirect()->to('/admin/admin_blogs');
        }
    }
}
