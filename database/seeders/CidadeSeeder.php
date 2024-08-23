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
            ],
            [
                'descricao' => 'O Rio Branco é a capital do estado do Acre, localizado na região Norte do Brasil. É uma cidade cercada por florestas tropicais, com uma rica história ligada à exploração da borracha. Rio Branco é conhecida por seu clima quente e úmido e possui uma cultura influenciada por tradições indígenas e nordestinas.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Rio Branco',
                'estado' => 'AC',
            ],
            [
                'descricao' => 'Maceió é a capital do estado de Alagoas, conhecida por suas praias de areia branca, águas cristalinas e piscinas naturais. A cidade é um destino turístico popular, oferecendo uma mistura de belezas naturais, cultura rica e gastronomia à base de frutos do mar.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Maceió',
                'estado' => 'AL',
            ],
            [
                'descricao' => 'Macapá, capital do estado do Amapá, é conhecida por ser cortada pela linha do Equador, que divide a cidade entre os hemisférios norte e sul. A cidade possui um forte histórico, sendo o Forte São José de Macapá uma de suas principais atrações turísticas.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Macapá',
                'estado' => 'AP',
            ],
            [
                'descricao' => 'Manaus é a capital do Amazonas, localizada no coração da Floresta Amazônica. A cidade é famosa pelo Teatro Amazonas, uma majestosa casa de ópera construída durante o ciclo da borracha, e por ser a porta de entrada para explorar a biodiversidade da floresta tropical.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Manaus',
                'estado' => 'AM',
            ],
            [
                'descricao' => 'Fortaleza, capital do Ceará, é um importante destino turístico no Brasil, conhecida por suas praias de águas mornas, como a Praia do Futuro, e sua animada vida noturna. A cidade também é famosa por sua culinária baseada em frutos do mar e pela hospitalidade de seu povo.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Fortaleza',
                'estado' => 'CE',
            ],
            [
                'descricao' => 'Brasília, a capital do Brasil, é uma cidade planejada que foi inaugurada em 1960. Conhecida por sua arquitetura moderna e arrojada, projetada por Oscar Niemeyer, e por ser o centro político do país, Brasília é um marco do urbanismo mundial.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Brasília',
                'estado' => 'DF',
            ],
            [
                'descricao' => 'Vitória, a capital do Espírito Santo, é uma cidade insular com belas praias e uma rica história cultural. A cidade é conhecida por sua qualidade de vida, com um cenário de montanhas e o mar que proporcionam uma combinação perfeita entre a vida urbana e a natureza.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Vitória',
                'estado' => 'ES',
            ],
            [
                'descricao' => 'Goiânia, capital do estado de Goiás, é uma cidade conhecida por seu urbanismo planejado e áreas verdes. Goiânia é um importante centro econômico e cultural da região Centro-Oeste, com destaque para suas atividades agroindustriais e vida noturna vibrante.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Goiânia',
                'estado' => 'GO',
            ],
            [
                'descricao' => 'São Luís, a capital do Maranhão, é conhecida por seu centro histórico, que é Patrimônio Mundial da UNESCO. A cidade tem uma arquitetura colonial portuguesa e é famosa por seu Bumba Meu Boi, uma festa tradicional que mistura elementos indígenas, africanos e europeus.',
                'crime' => 'Descrição do Crime',
                'nome' => 'São Luís',
                'estado' => 'MA',
            ],
            [
                'descricao' => 'Cuiabá é a capital do estado de Mato Grosso, localizada próxima ao Pantanal, uma das maiores áreas úmidas do mundo. A cidade é conhecida por seu clima quente, sua culinária regional e por ser um ponto de partida para aventuras ecológicas.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Cuiabá',
                'estado' => 'MT',
            ],
            [
                'descricao' => 'Campo Grande, a capital do Mato Grosso do Sul, é conhecida como a "Cidade Morena" devido ao tom avermelhado de seu solo. A cidade é um importante ponto de acesso ao Pantanal e é conhecida por sua hospitalidade e qualidade de vida.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Campo Grande',
                'estado' => 'MS',
            ],
            [
                'descricao' => 'Belém, a capital do Pará, é conhecida como a "Cidade das Mangueiras" devido à abundância dessas árvores em suas ruas. A cidade tem uma rica herança cultural e histórica, com destaque para o Círio de Nazaré, uma das maiores procissões religiosas do Brasil.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Belém',
                'estado' => 'PA',
            ],
            [
                'descricao' => 'João Pessoa, a capital da Paraíba, é conhecida por suas praias tranquilas e pelo fato de ser o ponto mais oriental das Américas, onde o sol nasce primeiro. A cidade possui uma mistura de história colonial e modernidade, com destaque para seu centro histórico bem preservado.',
                'crime' => 'Descrição do Crime',
                'nome' => 'João Pessoa',
                'estado' => 'PB',
            ],
            [
                'descricao' => 'Curitiba, a capital do Paraná, é conhecida por seu planejamento urbano, áreas verdes e qualidade de vida. A cidade é um exemplo de sustentabilidade e inovação no Brasil, com destaque para seu eficiente sistema de transporte público.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Curitiba',
                'estado' => 'PR',
            ],
            [
                'descricao' => 'Teresina, a capital do Piauí, é uma cidade localizada no interior do estado e é conhecida por seu clima quente. Teresina é cercada por rios e é famosa por sua hospitalidade e tranquilidade, sendo um importante centro comercial e econômico da região.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Teresina',
                'estado' => 'PI',
            ],
            [
                'descricao' => 'Natal, a capital do Rio Grande do Norte, é conhecida por suas dunas e praias de águas claras. A cidade é um destino turístico popular, famosa pelo Forte dos Reis Magos, e oferece um clima ensolarado durante a maior parte do ano.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Natal',
                'estado' => 'RN',
            ],
            [
                'descricao' => 'Porto Alegre, a capital do Rio Grande do Sul, é conhecida por sua rica herança cultural e sua forte identidade gaúcha. A cidade é um importante centro cultural e econômico, com destaque para seus parques urbanos e vida cultural vibrante.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Porto Alegre',
                'estado' => 'RS',
            ],
            [
                'descricao' => 'Porto Velho, capital de Rondônia, é uma cidade com uma história ligada à construção da Estrada de Ferro Madeira-Mamoré. Localizada às margens do Rio Madeira, Porto Velho é um importante centro de transporte e comércio na região Norte do Brasil.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Porto Velho',
                'estado' => 'RO',
            ],
            [
                'descricao' => 'Boa Vista, a capital de Roraima, é a única capital brasileira localizada totalmente ao norte da linha do Equador. A cidade é conhecida por seu planejamento urbano, clima quente e sua proximidade com o Monte Roraima, uma das mais antigas formações geológicas do planeta.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Boa Vista',
                'estado' => 'RR',
            ],
            [
                'descricao' => 'Florianópolis, a capital de Santa Catarina, é conhecida por suas belas praias, ilhas e natureza exuberante. A cidade é um dos destinos turísticos mais populares do Brasil e é famosa por sua qualidade de vida, cultura açoriana e gastronomia à base de frutos do mar.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Florianópolis',
                'estado' => 'SC',
            ],
            [
                'descricao' => 'São Paulo, a capital do estado de São Paulo, é a maior cidade do Brasil e um dos principais centros financeiros e culturais da América Latina. A cidade é conhecida por sua diversidade cultural, gastronomia, vida noturna intensa e uma arquitetura que mistura o moderno com o histórico.',
                'crime' => 'Descrição do Crime',
                'nome' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'descricao' => 'Aracaju, a capital de Sergipe, é conhecida por suas praias tranquilas e pela qualidade de vida que oferece. A cidade é acolhedora, com uma atmosfera de interior, e conta com belas paisagens naturais e uma rica culinária regional.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Aracaju',
                'estado' => 'SE',
            ],
            [
                'descricao' => 'Palmas, a capital do Tocantins, é a mais jovem capital do Brasil, fundada em 1989. A cidade é planejada e conhecida por suas avenidas largas, áreas verdes e o lago que proporciona uma bela paisagem natural e oportunidades para atividades ao ar livre.',
                'crime' => 'Descrição do Crime',
                'nome' => 'Palmas',
                'estado' => 'TO',
            ],
        ];

        DB::table('cidades')->insert($cidadesArray);
    }
}
