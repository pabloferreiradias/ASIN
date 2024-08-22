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
        $ac = DB::table('cidades')->where('estado', 'AC')->first();
        $al = DB::table('cidades')->where('estado', 'AL')->first();
        $ap = DB::table('cidades')->where('estado', 'AP')->first();
        $am = DB::table('cidades')->where('estado', 'AM')->first();
        $ba = DB::table('cidades')->where('estado', 'BA')->first();
        $ce = DB::table('cidades')->where('estado', 'CE')->first();
        $df = DB::table('cidades')->where('estado', 'DF')->first();
        $es = DB::table('cidades')->where('estado', 'ES')->first();
        $go = DB::table('cidades')->where('estado', 'GO')->first();
        $ma = DB::table('cidades')->where('estado', 'MA')->first();
        $mt = DB::table('cidades')->where('estado', 'MT')->first();
        $ms = DB::table('cidades')->where('estado', 'MS')->first();
        $mg = DB::table('cidades')->where('estado', 'MG')->first();
        $pa = DB::table('cidades')->where('estado', 'PA')->first();
        $pb = DB::table('cidades')->where('estado', 'PB')->first();
        $pr = DB::table('cidades')->where('estado', 'PR')->first();
        $pe = DB::table('cidades')->where('estado', 'PE')->first();
        $pi = DB::table('cidades')->where('estado', 'PI')->first();
        $rj = DB::table('cidades')->where('estado', 'RJ')->first();
        $rn = DB::table('cidades')->where('estado', 'RN')->first();
        $rs = DB::table('cidades')->where('estado', 'RS')->first();
        $ro = DB::table('cidades')->where('estado', 'RO')->first();
        $rr = DB::table('cidades')->where('estado', 'RR')->first();
        $sc = DB::table('cidades')->where('estado', 'SC')->first();
        $sp = DB::table('cidades')->where('estado', 'SP')->first();
        $se = DB::table('cidades')->where('estado', 'SE')->first();
        $to = DB::table('cidades')->where('estado', 'TO')->first();

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
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade com mais de 400 anos, que tem o cinema mais antigo em funcionamento',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que tem a maior procissão católica do mundo: o Círio de Nazaré.',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Lindanor Celina.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a única capital brasileira situada acima da linha do Equador,',
                'local' => 'Hotel',
                'descricao' => 'Um hotel muito bonito',
                'cidade_id' => $rr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que foi parar no Guinness Book depois de fazer a maior paçoca do mundo em 2018',
                'local' => 'Praça',
                'descricao' => 'Uma praça muito bonita',
                'cidade_id' => $rr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Lindanor Celina.',
                'local' => 'Bilbioteca',
                'descricao' => 'Uma bilbioteca muito bonita',
                'cidade_id' => $rr->id,
            ],
        ];

        DB::table('pistas')->insert($pistasArray);
    }
}
