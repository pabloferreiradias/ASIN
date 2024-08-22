<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rj = DB::table('cidades')->where('estado', 'RJ')->first();
        $mg = DB::table('cidades')->where('estado', 'MG')->first();
        $pe = DB::table('cidades')->where('estado', 'PE')->first();
        $ba = DB::table('cidades')->where('estado', 'BA')->first();

        $pistasArray = [
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela queria conhecer a cidade que mais possui baobás fora do continente africano. A árvore do livro O Pequeno Príncipe.',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que adorava carnaval e queria conhecer o Galo da Madrugada, reconhecido como o maior bloco de carnaval do mundo.',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer a cidade onde Clarice Lispector viveu.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que ocupou o posto de capital do Brasil entre 1549, quando foi fundada, e 1763, ano em que passou o posto para o Rio de Janeiro.',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o centro histórico do Pelourinho e o Elevador Lacerda. Ela disse que esse foi o primeiro elevador construído no Brasil.',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Castro Alves.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Museu da Pampulha, que foi projetado por Oscar Niemeyer.',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela estava muito animada e falava sobre comer pão de queijo, feijão tropeiro e torresmo.',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Carlos Drummond de Andrade.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer O Cristo Redentor. Ela disse que ele é uma das sete maravilhas do mundo.',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $rj->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a maior floresta urbana do mundo e a famosa praia que inspirou a canção de Tom Jobim',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $rj->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Machado de Assis.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $rj->id,
            ],
        ];

        DB::table('pistas')->insert($pistasArray);
    }
}
