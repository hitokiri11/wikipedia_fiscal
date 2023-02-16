<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class UserClientController extends Controller
{

    function __construct() {
        $this->middleware('permission:users_client-sincronizar', ['only' => ['sincronizar']]);
   }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $hubspot = \HubSpot\Factory::createWithDeveloperApiKey('developer-apikey'); */ 
        $data_user_clients = UserClient::get();

        return view('admin.clientes', compact(['data_user_clients']));
      
    }

    public function sincronizar()  {
        dd('aqui');
       /*  $arr = [];
        $post_json = json_encode($arr); */
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . env('HUBSPOT_API_KEY');
        $client = new Client();
        $res = $client->request('POST', $endpoint, [
            'body' => $post_json
        ]);
        return view('admin.clientes', compact(['res']));

       /*  return "Contact Created!"; */
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
