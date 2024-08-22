<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidadesArray = [
            [
                'descricao' => 'O Rio de Janeiro é uma vibrante cidade costeira do Brasil, famosa por suas praias icônicas como Copacabana e Ipanema, o Cristo Redentor que coroa o Corcovado, e o Pão de Açúcar com sua vista deslumbrante. Com uma rica mistura de cultura, carnaval, samba e uma atmosfera descontraída, o Rio é uma cidade onde a beleza natural se encontra com a vida urbana dinâmica, oferecendo um cenário único de montanhas, mar e uma vida noturna animada.',
                'crime' => 'Obra de Tarsila do Amaral, "O Vendedor de Frutas", é Roubada do MAM no Rio de Janeiro
Na madrugada de ontem, uma das mais icônicas obras de Tarsila do Amaral, "O Vendedor de Frutas", foi roubada do Museu de Arte Moderna (MAM) no Rio de Janeiro. A tela, avaliada em milhões de reais, desapareceu em uma ação que deixou as autoridades em alerta e o mundo da arte em choque.
Os criminosos invadiram o museu após desativarem o sistema de segurança, mostrando um alto nível de sofisticação e planejamento. A obra, que faz parte do acervo do MAM e é considerada um tesouro do modernismo brasileiro, foi levada sem deixar rastros imediatos. As investigações estão em andamento, com a polícia revisando imagens de câmeras de segurança e ouvindo funcionários para tentar identificar os autores do roubo.
Especialistas em arte expressaram grande preocupação com o destino da tela, temendo que possa ser traficada internacionalmente. O MAM, por sua vez, reforçou suas medidas de segurança e está colaborando intensamente com as autoridades para recuperar a obra.
O roubo de "O Vendedor de Frutas" representa uma grande perda para a cultura brasileira, e a comunidade artística, assim como o público em geral, aguarda ansiosamente por novas informações sobre o caso e, sobretudo, pela recuperação da obra.',
                'nome' => 'Rio de Janeiro',
                'estado' => 'RJ',
            ],
            [
                'descricao' => 'Belo Horizonte, capital de Minas Gerais, é uma cidade acolhedora e montanhosa, conhecida por sua arquitetura modernista e rica cultura de bares. Com vistas panorâmicas e uma vibrante cena artística, BH combina tradição e modernidade em um ambiente hospitaleiro.',
                'crime' => 'Obra de R$ 15 milhões desaparece em casa de BH e MP investiga caso
                A obra "Visão de Minas" foi pintada por Alberto da Veiga Guignard, na década de 1950. A pintura tinha quase cinco metros de largura e decorava a sala de estar de uma casa, na capital mineira. A parede inteira onde ela estava foi retirada.
                O Ministério Público de Minas Gerais (MPMG) investiga o sumiço de uma obra do artista Alberto da Veiga Guignard, avaliada em R$ 15 milhões. O MP foi acionado após uma denúncia anônima, em Belo Horizonte.
A obra em questão é a Visão de Minas, da década de 1950, e tem cerca de cinco metros de largura.
A peça decorava a sala de estar de uma casa que está em processo de tombamento na capital mineira. O imóvel pertencia ao médico Caio Benjamin Dias, que já morreu. Hoje, a família dele é responsável pelo patrimônio. No entanto, durante uma reforma irregular, a obra desapareceu.
A residência está em processo de tombamento pelo município desde 2007. Ela faz parte de um conjunto de imóveis projetados pelo arquiteto Sylvio de Vasconcellos. No dossiê de tombamento, o painel está marcado como bem integrado ao imóvel.',
                'nome' => 'Belo Horizonte',
                'estado' => 'MG',
            ],
            [
                'descricao' => 'Recife, capital de Pernambuco, é uma cidade histórica e cultural, conhecida por seus canais, pontes e praias, como Boa Viagem. Com uma vibrante cena artística, incluindo o famoso Carnaval e o frevo, Recife combina herança colonial com modernidade, destacando-se como um centro econômico e cultural do Nordeste brasileiro.',
                'crime' => 'Roubo do Marco Zero da Praça Rio Branco Choca Recife
Na madrugada da última quarta-feira, o Marco Zero da Praça Rio Branco, em Recife, foi alvo de um audacioso roubo que deixou a cidade perplexa. O monumento, símbolo histórico e cultural da capital pernambucana, foi removido de sua base por criminosos ainda não identificados.
As autoridades locais estão em alerta máximo, investigando as câmeras de segurança da região para tentar identificar os responsáveis. A ação foi realizada com precisão, indicando que o crime foi planejado com antecedência. A remoção do Marco Zero, que é o ponto de referência para a medição de todas as distâncias na cidade, causou indignação e tristeza na população recifense, que vê o monumento como parte fundamental da identidade da cidade.
A Prefeitura de Recife prometeu um esforço conjunto entre as forças de segurança para recuperar o Marco Zero e punir os responsáveis. Enquanto isso, a população se mobiliza nas redes sociais, exigindo respostas rápidas e a devolução do marco histórico à cidade.',
                'nome' => 'Recife',
                'estado' => 'PE',
            ],
            [
                'descricao' => 'Salvador, capital da Bahia, é uma cidade vibrante e histórica, marcada por seu rico patrimônio afro-brasileiro, música, e culinária. Famosa pelo Pelourinho, suas coloridas ruas coloniais, e o animado Carnaval, Salvador mistura tradição com uma energia cultural única, cercada por belas praias e uma atmosfera acolhedora.',
                'crime' => 'Instrumento Musical é Roubado do Solar Ferrão em Salvador
Um raro instrumento musical, parte do acervo em exposição no Centro Cultural Solar Ferrão, em Salvador, foi roubado na madrugada desta quinta-feira. O instrumento, de grande valor histórico e cultural, faz parte da Coleção de Instrumentos Musicais Tradicionais Emília Biancardi, uma das mais importantes do país.
O crime foi descoberto pela equipe de segurança ao abrir o centro cultural na manhã de hoje. As primeiras informações indicam que os criminosos invadiram o prédio histórico após desativarem o sistema de alarme, agindo com rapidez e precisão. A polícia já iniciou as investigações, revisando imagens de câmeras de segurança e entrevistando funcionários e testemunhas.
O roubo gerou grande comoção na comunidade cultural baiana, preocupada com o destino do instrumento, que é uma peça única e de grande relevância para a preservação da cultura musical do Brasil. O Solar Ferrão, localizado no Pelourinho, é um dos mais importantes espaços culturais de Salvador, abrigando exposições e eventos ligados à cultura e à arte.
As autoridades estão mobilizadas para recuperar o instrumento e garantir a segurança do acervo do centro cultural. Enquanto isso, a população e a comunidade artística aguardam por mais informações e pela rápida solução do caso.',
                'nome' => 'Salvador',
                'estado' => 'BA',
            ]
        ];

        DB::table('cidades')->insert($cidadesArray);
    }
}
