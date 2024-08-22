<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Caso;


class CasoController extends Controller
{
    public function novoCaso()
    {
        $pistasCidadeCrime = null;
        $pistasCidade2 = null;
        $pistasCidade3 = null;

        $cidades = DB::table('cidades')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $pistasCidadeCrime = DB::table('pistas')
            ->where('cidade_id', '=', $cidades[1]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        
        $pistasCidade2 = DB::table('pistas')
            ->where('cidade_id', '=', $cidades[2]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        
        $pistasCidade3 = DB::table('pistas')
            ->where('cidade_id', '=', $cidades[3]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $caso = Caso::create([
            'cidade_crime_id' => $cidades[0]->id,
            'cidade_destino_1_id' => $cidades[1]->id,
            'cidade_destino_2_id' => $cidades[2]->id,
            'cidade_destino_3_id' => $cidades[3]->id,
        ]);

        return response()->json([
            'message' => 'Caso Criado',
            'status' => $caso ? 200 : 500,
            'cidadeCrime' => $cidades[0],
            'cidadeDestino1' => $cidades[1],
            'cidadeDestino2' => $cidades[2],
            'cidadeDestino3' => $cidades[3],
            'pistasCidadeCrime' => $pistasCidadeCrime,
            'pistasCidade2' => $pistasCidade2,
            'pistasCidade3' => $pistasCidade3,
        ]);
    }
}
