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
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que adorava carnaval e queria conhecer o Galo da Madrugada, reconhecido como o maior bloco de carnaval do mundo.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer a cidade onde Clarice Lispector viveu.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $pe->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que ocupou o posto de capital do Brasil entre 1549, quando foi fundada, e 1763, ano em que passou o posto para o Rio de Janeiro.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o centro histórico do Pelourinho e o Elevador Lacerda. Ela disse que esse foi o primeiro elevador construído no Brasil.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Castro Alves.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ba->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Museu da Pampulha, que foi projetado por Oscar Niemeyer.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela estava muito animada e falava sobre comer pão de queijo, feijão tropeiro e torresmo.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Carlos Drummond de Andrade.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $mg->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer O Cristo Redentor. Ela disse que ele é uma das sete maravilhas do mundo.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $rj->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a maior floresta urbana do mundo e a famosa praia que inspirou a canção de Tom Jobim',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $rj->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Machado de Assis.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $rj->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade com mais de 400 anos, que tem o cinema mais antigo em funcionamento',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que tem a maior procissão católica do mundo: o Círio de Nazaré.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Lindanor Celina.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $pa->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a única capital brasileira situada acima da linha do Equador,',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $rr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que foi parar no Guinness Book depois de fazer a maior paçoca do mundo em 2018',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $rr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Lindanor Celina.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $rr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que fica bem na linha do Equador.Lá os habitantes conseguem ver dois equinócios por ano: o de outono e o de primavera.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ap->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que tem o Estádio Zerão. Que fica acima da linha do Equador, fazendo com que parte do campo esteja no hemisfério sul e a outra metade no hemisfério norte.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ap->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Alcy Araújo.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ap->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que teve a primeira universidade do Brasil em 1909.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $am->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o maior estado do Brasil.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $am->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Milton Hatoum',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $am->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Memorial Coluna Prestes, projeto do renomado arquiteto Oscar Niemeyer.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $to->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a Praça dos Girassóis, que é a maior praça da América Latina.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $to->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado aonde Lita Maria pertence a Academia de Letras.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $to->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a única capital que faz fronteira com outro país, no caso a Bolívia.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ro->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer uma cidade que tem dois feriados de aniversário, pois sua fundação aconteceu em outubro, mas a celebração de abertura foi realizada somente em janeiro do ano seguinte.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ro->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Augusto Branco',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ro->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Mercado Velho, construído há mais de 90 anos e o Museu da Borracha',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ac->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida também como “Cidade Verde”, porque abriga diversos parques relacionados à floresta amazônica.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ac->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Joaquim Nogueira.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ac->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Cânion de Xingó, que é o quinto maior cânion navegável do mundo e foi fundado em 1994 após uma inundação.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $se->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é a maior produtora de mangaba, uma fruta típica do estado.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $se->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Sílvio Romero.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $se->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Theatro José de Alencar, uma construção histórica fundada em 1910.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ce->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida pelas praias, lagoas e dunas. Além das belezas naturais, Essa cidade também possui uma forte tradição folclórica, que é simbolizada pelas danças típicas.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ce->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Rachel de Queiroz.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ce->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que tem a localização no extremo oriente da América do Sul, faz com que a cidade seja a primeira a ver a luz do sol todos os dias.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $pb->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida como Cidade das Acácias, por conta do grande número de árvores com essa flor.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $pb->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Ariano Suassuna.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $pb->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o museu Théo Brandão de Antropologia e Folclore, que abriga diversas fotografias e informações sobre a cultura local.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $al->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida como “Caribe Brasileiro”, por conta das suas praias de águas cristalinas e de belezas naturais.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $al->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Graciliano Ramos.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $al->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria andar de Buggy nas Dunas de Genipabu.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $rn->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida como a “Capital Mundial do Buggy”, porque possui a maior frota de buggys do Brasil e do mundo.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $rn->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Maria Emília Wanderley.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $rn->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida por seu centro histórico, que possui diversas construções reconhecidas pela Unesco como Patrimônios Culturais da Humanidade.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ma->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida como a “Capital do Reggae”, gênero musical preferido entre os mais de um milhão de habitantes.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ma->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Aluísio Azevedo.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ma->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é a única capital brasileira que fica na divisa de dois estados. Ela faz divisa com Piauí e Maranhão.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $pi->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é conhecida pela Cajuína: uma bebida típica derivada do caju e que é considerada Patrimônio Cultural do Estado.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $pi->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Francisca Miriam.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $pi->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que é considerada a capital do Brasil mais populosa.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $sp->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria comer o sanduíche de mortadela no Mercadão e o Parque Ibirapuera, cheio de árvores e pássaros.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $sp->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Mário de Andrade.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $sp->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o famoso centro histórico composto pela Catedral Metropolitana, Capela Santa Luzia, o Theatro Carlos Gomes.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $es->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade já foi considerada como uma das melhores cidades para se viver no Brasil. Ela também estava ansiosa pra comer a famosa Moqueca.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $es->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Rubem Braga.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $es->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o memorial JK, construído para homenagear o presidente Juscelino Kubitschek.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $df->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer uma cidade que não possui esquinas, pois é dividida em quadras.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $df->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Fabiane Guimarães***.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $df->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Parque das Nações Indígenas e o Lago do Amor.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $ms->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria comer caribéu e uma a sopa paraguaia que na verdade é um bolo salgado de milho.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $ms->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Hélio Serejo.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $ms->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Centro Geodésico da América do Sul. Um marco histórico que fica situado exatamente no centro da América do Sul',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $mt->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a única cidade que possui um Museu de Brinquedos.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $mt->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Lucinda Persona.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $mt->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a cidade que também é conhecida como a Capital do Cerrado.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $go->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a maior feira livre do mundo, que acontece todos os domingos na Praça do Trabalhador.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $go->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de José J. Veiga.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $go->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a "Capital Ecológica do Brasil". A cidade que é a mais sustentável ambientalmente da América Latina.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $pr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o Festival de Teatro e a Rua 24 Horas, que funciona ininterruptamente.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $pr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Paulo Leminski.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $pr->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a ponte Hercílio Luz e o Mirante do Morro da Cruz.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $sc->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a “Ilha da Magia”, a cidade que é famosa por suas belezas naturais e paisagens, como as dunas da Joaquina.',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $sc->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Oscar Rosas.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $sc->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer a Casa de Cultura Mario Quintana, a Catedral Metropolitana, o Parque Farroupilha e o Mercado Público.',
                'local' => 'Hotel',
                'imagem' => asset('hotel.png'),
                'descricao' => 'Investigando os hoteis da cidade, você conseguirá pistas relativas a pontos turisticos que a pessoa suspeita se interessou.',
                'cidade_id' => $rs->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que queria conhecer o famoso chimarrão',
                'local' => 'Praça',
                'imagem' => asset('praca.png'),
                'descricao' => 'Praças são ótimos lugares para conhecer hábitos e costumes das cidades.',
                'cidade_id' => $rs->id,
            ],
            [
                'pista' => 'Eu vi a pessoa suspeita! Ela disse que estava ansiosa para conhecer o estado natal de Luis Fernando Verissimo.',
                'local' => 'Biblioteca',
                'imagem' => asset('biblioteca.png'),
                'descricao' => 'As blibliotecas são os melhores lugares para buscar informações sobre autores famosos.',
                'cidade_id' => $rs->id,
            ],
        ];

        DB::table('pistas')->insert($pistasArray);
    }
}
