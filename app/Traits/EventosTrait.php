<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait EventosTrait
{
    /**
     * Insertar evento en SINDRA
     */
    public function eventosindra($placa, $seriemaquina, $prueba)
    {
        try {
            date_default_timezone_set('America/bogota');
            $date = date("Y-m-d H:i:s");
            $idrunt = env('ID_RUNT');
            $cadenasicov = "862|" . $date . "|" . $prueba . "|" . $placa . "|" . $seriemaquina . "|2|" . $idrunt;
            DB::insert("INSERT INTO eventosindra VALUES (NULL,'" . $placa . "-" . $prueba . "','" . $cadenasicov . "','" . $date . "','e',0,'Operación pendiente')");
            
            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Ejecutar prueba CI2
     */
    public function eventosci2(Request $request)
    {
        // var_dump($request->all());
        try {
            date_default_timezone_set('America/bogota');
            $date = date("Y-m-d H:i:s");
            // Obtener la IP desde el .env (DB_HOST)
            $ipBaseDatos = env('SERVER_HOST');
            $url = "http://{$ipBaseDatos}/et/index.php/oficina/ci2/Cci2/ciclo_prueba";
            // Hacer la petición GET con los parámetros
            $response = Http::get($url, [
                'fecha' => $date,
                'tipoPrueba' => $request->input('tipopruebaCi2'),
                'placa' => trim($request->input('placa')),
                'serialEquipo' => explode('-', request()->input('selMaquina'))[1],
                'idEvento' => 2,
                'mensajeEvento' => "FIN DE PRUEBA"
            ]);

            // Verificar si fue exitosa
            if ($response->successful()) {
                $respuesta = $response->body();
                return ['success' => true, 'data' => $respuesta];
            } else {
                return ['success' => false, 'error' => $response->status()];
            }
            
        } catch (\Exception $e) {
           Log::error('Error en eventosci2: ' . $e->getMessage());
            return ['success' => false, 'error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}