<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

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

    static public function sincronizar()  {
        
        try {
                $data_clientes = UserClient::all();

                $response = Http::withHeaders([ 
                    'Accept'=> '*/*', 
                    'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)', 
                    'Authorization'=> 'Bearer '.env('HUBSPOT_API_KEY'), 
                ]) 
                ->get('https://api.hubapi.com/crm/v3/objects/contacts'); 

                $clientes = json_decode($response->body());
              
                 /* 
                    Luego se itera el objeto data_clientes para buscar email que no esten en res, los que no 
                    esten se guardan en un arreglo junto a su id, luego se itera este arreglo para eelimina esos 
                    correos de la base de datos.
                 */
                $clientes_eliminar = [];
                
                foreach($data_clientes as $k => $v) { 
                    $flag_eliminar = false;
                    foreach($clientes->results as $i => $r) { 
                        if(isset($r->properties->email)) { 
                            if($v->email != $r->properties->email) {
                                $flag_eliminar = true;
                            } else {
                                $flag_eliminar = false;
                                break;
                            }
                        }
                    } 
               
                    if($flag_eliminar == true) {
                        array_push($clientes_eliminar, $v->id);
                    }
                }

                foreach($clientes_eliminar as $v) {
                    UserClient::where('id',$v)->delete();
                }
             
                /*  
                    Se itera res y se busca el email en base de datos local, si el email no esta se agrega con su 
                    has de clave del 1 al 9.
                 */
                $count_insert = 0;
                foreach($clientes->results as $k => $v) { 
                    if(isset($v->properties->email)) {
                        $data_cliente = UserClient::where('email',$v->properties->email)->first();
                        if(!$data_cliente) {
                            $new_cliente = new UserClient();
                            $new_cliente->name      = $v->properties->firstname.' '.$v->properties->lastname;
                            $new_cliente->email     = $v->properties->email;
                            $new_cliente->password  = '$2y$10$9N0yQL8svdnfBaLP35kNROlZ9LrB5eDJSnvkIl0PnOcW1x.ZpldqW';
                            $new_cliente->save();
                            $count_insert++;
                        }
                    } 
                }
                
                /* COMENTADO TEMPORALMENTE */ 
                return 'Se ha ejecutado la sincronización hacia el api de hubspot, se registraron '.$count_insert.' nuevos clientes y eliminaron '.count($clientes_eliminar).' clientes';

        } catch (\Throwable $e) {
            return 'Ha ocurrido el siguiente error al tratar de sincronizar con el api de hubspot: '.$e;
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
