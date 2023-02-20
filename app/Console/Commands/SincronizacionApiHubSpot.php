<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserClientController;

class SincronizacionApiHubSpot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sincronizacion:apiHubSpot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tarea que sincroniza diariamente la aplicación con api de hubspot para actualizar base de datos de clientes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       /*  return 0; */ 
        $res = UserClientController::sincronizar();
        $texto = "[".date("Y-m-d H:i:s"). "]".$res; 
        Storage:: append("archivo.txt", $texto);
        return $texto;
    }
}
