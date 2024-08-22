<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Caso;
use App\Models\Cidade;


class CasoController extends Controller
{
    public function novoCaso()
    {
        $pistasCidadeCrime = null;
        $pistasCidade2 = null;
        $pistasCidade3 = null;

        $cidades = Cidade::all();

        $cidadesAleatorias = $cidades->random(4);

        $pistasCidadeCrime = DB::table('pistas')
            ->where('cidade_id', '=', $cidadesAleatorias[1]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        
        $pistasCidade2 = DB::table('pistas')
            ->where('cidade_id', '=', $cidadesAleatorias[2]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        
        $pistasCidade3 = DB::table('pistas')
            ->where('cidade_id', '=', $cidadesAleatorias[3]->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $caso = Caso::create([
            'cidade_crime_id' => $cidadesAleatorias[0]->id,
            'cidade_destino_1_id' => $cidadesAleatorias[1]->id,
            'cidade_destino_2_id' => $cidadesAleatorias[2]->id,
            'cidade_destino_3_id' => $cidadesAleatorias[3]->id,
        ]);

        return response()->json([
            'message' => 'Caso Criado',
            'status' => $caso ? 200 : 500,
            'cidades' => $cidades,
            'cidadeCrime' => $cidadesAleatorias[0],
            'cidadeDestino1' => $cidadesAleatorias[1],
            'cidadeDestino2' => $cidadesAleatorias[2],
            'cidadeDestino3' => $cidadesAleatorias[3],
            'pistasCidadeCrime' => $pistasCidadeCrime,
            'pistasCidade2' => $pistasCidade2,
            'pistasCidade3' => $pistasCidade3,
        ]);
    }
}
