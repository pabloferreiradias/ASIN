<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Caso;
use App\Models\Cidade;


class CasoController extends Controller
{
    public function novoCaso()
    {
        $nomeImgPersonagens = collect([
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
            '10.png',
            '11.png',
            '12.png',
            '13.png',
            '14.png',
            '15.png',
            '16.png',
            '17.png',
            '18.png',
            '19.png',
            '20.png'
        ]);

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

        $personagensAleatorios = $nomeImgPersonagens->random(9);
        $contagemPersonagens = 0;

        foreach ($pistasCidadeCrime as $pista) {
            $pista->imagem_personagem = str_replace("http://localhost", "https://fd97-200-152-99-67.ngrok-free.app", asset('personagens/' . $personagensAleatorios[$contagemPersonagens]));
            $contagemPersonagens++;
        }

        foreach ($pistasCidade2 as $pista) {
            $pista->imagem_personagem = str_replace("http://localhost", "https://fd97-200-152-99-67.ngrok-free.app", asset('personagens/' . $personagensAleatorios[$contagemPersonagens]));
            $contagemPersonagens++;
        }

        foreach ($pistasCidade3 as $pista) {
            $pista->imagem_personagem = str_replace("http://localhost", "https://fd97-200-152-99-67.ngrok-free.app", asset('personagens/' . $personagensAleatorios[$contagemPersonagens]));
            $contagemPersonagens++;
        }

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
