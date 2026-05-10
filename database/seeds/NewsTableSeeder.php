<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('news')->delete();

       DB::table('news')->insert(array (
            0 =>
            array (
                'id' => 1,
                'image' => '902b1ebf4da28db5d7628275a0aab6e6.jpg',
                'font' => 'Assessorarte',
                'title' => 'Presidente confere posse a novos vice-governadores',
                'slug' => 'presidente-confere-posse-a-novos-vice-governadores',
                'subtitle' => 'O Presidente da República, João Lourenço, empossou, segunda-feira, em Luanda, o novo secretário de Estado e vice-governadores provinciais, nomeados recentemente.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>Na cerimónia, que decorreu no Palácio Presidencial da Cidada Alta, o Titular do Poder Executivo desejou êxitos aos novos responsáveis, destacando a importância do compromisso e dedicação no exercício das novas funções.&nbsp;</p><p>“Desejo muitos sucessos no desempenho das funções que passam a assumir a partir de agora”, exprimiu o Chefe de Estado.</p><p>Foram empossados Conceição Luís Cristovão, para o cargo de secretário de Estado das Obras Públicas, Urbanismo e Habitação, José Cumbo e Francisco Tchimbavo, para os cargos de vice-governadores de Cabinda para os sectores Político e Social e Económico, respectivamente.</p><p>Foi igualmente empossado Américo Tchissassa para o cargo de vice-governador de Benguela, para os Serviços Técnicos e Infra-estruturas.</p><p>A cerimónia contou com a presença da Vice-Presidente da República, Esperança da Costa, ministros e secretários do Presidente da República.</p>',
                'date' => '2025-11-04',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:27:53',
                'updated_at' => '2025-11-21 09:25:07',
            ),
            1 =>
            array (
                'id' => 2,
                'image' => '589b7cbc60dea59ce31af0c727f9f536.jpg',
                'font' => 'Assessorarte',
                'title' => 'Angola conquista 15 medalhas na Feira Internacional de Ideias na Alemanha',
                'slug' => 'angola-conquista-15-medalhas-na-feira-internacional-de-ideias-na-alemanha',
            'subtitle' => 'Angola liderou as conquistas na Feira Internacional de Ideias, Invenções e Novos Produtos (iENA 2025), em Nuremberga, Alemanha, com 15 medalhas.',
                'detach' => 'destaque',
                'status' => 'publicado',
            'description' => '<p>Entre as várias instituições angolanas participantes no evento, o&nbsp;Instituto de Telecomunicações 
(ITEL) liderou a arrecadação de medalhas com três, dos quais uma de ouro, prata e bronze.</p><p>Além do ITEL, a&nbsp;delegação angolana foi representada pela Universidade Agostinho Neto, Metodista, Universidade do Namibe, Casa de Caminho André Luíz (SEAKA) e Paulino Calei Alves (freelancer do Namibe), avança uma nota enviada ao JA Online.</p><p>A participação do país na iENA é uma oportunidade para 
promover o intercâmbio de experiências e o estabelecimento de parcerias que impulsionam o desenvolvimento tecnológico e económico global.</p><p>O acto representa, ainda, o crescente reconhecimento internacional da capacidade criativa e tecnológica das instituições nacionais.</p>',
                'date' => '2025-11-04',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:41:12',
                'updated_at' => '2025-11-21 09:57:58',
            ),
            2 =>
            array (
                'id' => 3,
                'image' => '5d5016edd9f20a97e01d522f7b73e0b6.jpg',
                'font' => 'Assessorarte',
                'title' => 'Comissão avalia preparação do acto central dos 50 anos da Independência Nacional',
                'slug' => 'comissao-avalia-preparacao-do-acto-central-dos-50-anos-da-independencia-nacional',
                'subtitle' => 'A Comissão Interministerial para a Organização das Acções Comemorativas Alusivas ao 50.º Aniversário da Independência Nacional avaliou, hoje, o grau de execução das actividades preparatórias do acto central das celebrações do 11 de Novembro.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>De acordo com uma nota, enviada ao JA Online, esta é a 15.ª reunião ordinária da comissão interministerial presidida pelo ministro de Estado e Chefe da Casa Civil do Presidente da República, Adão de Almeida.</p><p>A agenda de trabalhos compreende, ainda, a apreciação do ponto de situação das acções complementares às comemorações centrais para garantir a plena operacionalidade das iniciativas programadas.</p>',
                'date' => '2025-11-04',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:48:16',
                'updated_at' => '2025-11-21 09:21:14',
            ),
            3 =>
            array (
                'id' => 4,
                'image' => '97ad588eb639072225e3476068b37624.jpg',
                'font' => 'DR',
                'title' => 'Angola quer afirma-se como actor na promoção da paz e segurança na região',
                'slug' => 'angola-quer-afirma-se-como-actor-na-promocao-da-paz-e-seguranca-na-regiao',
                'subtitle' => 'O ministro das Relações Exteriores, Téte António, sublinhou, hoje, em Luanda, que Angola ambiciona a responsabilidade de se afirmar como um actor imprescindível na promoção da paz e da segurança no continente africano, sobretudo nas regiões Central, Austral e Grandes Lagos.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>O ministro falava na cerimónia de abertura do Curso de Formação de Formadores e Pré-Desdobramento em Operações de Manutenção de Paz, sob a égide das Nações Unidas, que arrancou hoje na Academia Diplomática Venâncio de Moura, conforme uma uma nota de imprensa do MIREX.</p><p>No seu entender, é imperativo fortalecer a capacidade de desdobramento ágil, consolidar as forças de reacção imediata e expandir as parcerias com as Nações Unidas, a União Africana e as organizações regionais.</p><p>Téte António disse, ainda, que longo da sua própria trajectória, Angola reconhece o valor inestimável da paz, e reafirmo comprometimento em contribuir para a causa da paz e da segurança internacionais, participando activamente em iniciativas de formação, cooperação técnica e 
intercâmbio de</p><p>experiências com as Nações Unidas e com os seus parceiros regionais.</p><p>Para o titular da pasta do Ministério 
das Relações Exteriores, este curso ora inaugurado tem como propósito primordial preparar e consolidar um corpo de formadores altamente qualificados, aptos para transmitir conhecimento, fomentar boas práticas e assegurar que as nossas forças estejam plenamente capacitadas para integrar missões de paz sob o mandato das Nações Unidas, em qualquer parte do globo.</p><p>O ministro enalteceu, igualmente, o papel da Academia Diplomática Venâncio de Moura, enquanto centro de excelência da diplomacia angolana, tem exercido um</p><p>papel 
crescente na formação de quadros civis e militares em áreas relacionadas à política externa, diplomacia preventiva, mediação e manutenção da paz.</p>',
                'date' => '2025-11-04',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:54:39',
                'updated_at' => '2025-11-21 09:12:23',
            ),
            4 =>
            array (
                'id' => 5,
                'image' => '693ef970e5988bfc6afcca7bf7ed455f.jpg',
                'font' => 'TPA',
                'title' => 'Treze Chefes de Estado confirmam presença nas celebrações dos 50 anos da Independência',
                'slug' => 'treze-chefes-de-estado-confirmam-presenca-nas-celebracoes-dos-50-anos-da-independencia',
                'subtitle' => 'Treze Chefes de Estado já confirmaram a presença nas celebrações dos 50 anos da Independência Nacional 
de Angola, cujo acto central será realizado no dia 11 de Novembro, na Praça da República, em Luanda.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>A informação foi avançada, esta terça-feira, aos jornalistas pela secretaria de Estado para Administração do Território, Teresa Quivienguele, à margem da reunião da Comisão Interministerial que avaliou os preparativos do evento.</p><p>Teresa Quivienguele disse, também, que o acto central contará acima de oito mil pessoas, incluindo delegações estrangeiras.</p><p>O Governo considera que a celebração do dia 11 de Novembro é uma oportunidade para reflectir sobre três momentos-chave da nossa trajetória: a luta pela independência, a conquista da paz e a construção do desenvolvimento nacional.</p>',
                'date' => '2025-11-04',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 13:58:00',
                'updated_at' => '2025-11-21 08:57:40',
            ),
            5 =>
            array (
                'id' => 6,
                'image' => 'c7483e619b4db9d4e874c1b29eda5b0c.jpg',
                'font' => 'DR',
                'title' => 'Banco Mundial e UIP-PFRHS avaliam progressos do relatório trimestral',
                'slug' => 'banco-mundial-e-uip-pfrhs-avaliam-progressos-do-relatorio-trimestral',
            'subtitle' => 'Uma Missão do Banco Mundial reuniu-se, segunda-feira, em Luanda, com a Unidade de Implementação do Projecto de Formação de Recursos Humanos em Saúde (UIP-PFRHS), com objectivo de analisar o relatório trimestral.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>Na reunião, segundo uma nota de imprensa, as entidades avaliaram, igualmente, o plano da missão técnica à província do Huambo, agendada para os dias 5 e 6 deste mês, que incluirá visitas de campo, encontros com formandos e sessões 
de avaliação da gestão do projecto.</p><p>O encontro marcou o início da Missão de Apoio à Implementação do Projecto de Formação dos Recursos Humanos para a Cobertura Universal de Saúde, uma iniciativa estratégica que visa fortalecer as competências técnicas e de gestão dos profissionais do sector da saúde em Angola.</p><p>Para o coordenador do projecto, Job Monteiro, o compromisso é garantir que o investimento na formação se traduza em melhorias reais na qualidade dos serviços de saúde prestados às populações.</p><p>No final do encontro, realizou-se, inda, o acto de despedida de nove bolseiros que partirão, a partir de quarta-feira, para Portugal e Índia, onde frequentarão cursos de especialização e mestrado nas áreas de Nefrologia, Gestão em Saúde e Transplante de Células-Tronco Hematopoéticas.</p>',
                'date' => '2025-11-04',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 14:01:36',
                'updated_at' => '2025-11-21 09:56:21',
            ),
            6 =>
            array (
                'id' => 7,
                'image' => '4fabe8f4882b429cacb414c597ab531e.jpg',
                'font' => 'Cedida pelo autor',
                'title' => 'Adebayo Vunge lança "Impressões Digitais" no próximo dia 12 deste mês',
                'slug' => 'adebayo-vunge-lanca-impressoes-digitais-no-proximo-dia-12-deste-mes',
                'subtitle' => 'O jornalista e consultor Adebayo Vunge vai lançar, no próximo dia 12 deste mês, em Luanda, o seu novo livro intitulado "Impressões Digitais", sob chancela da editora Rosa de Porcelana.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>Durante a sessão de lançamento, a apresentação do livro será feita pelo sociólogo e docente universitário Paulo de Carvalho, segundo um comunicado de imprensa enviado ao Jornal de Angola Online.</p><p>A obra reúne crónicas seleciondas entre as publicadas nos últimos anos, na sua coluna do Jornal de Angola, e aborda um vasto leque de temas ligados à realidade nacional - da política às finanças públicas e governação, da economia às autarquias, da saúde à cultura, passando ainda pela inclusão social e pelo jornalismo.</p><p>No geral, explica o autor, trata-se de “reflexões escritas no ritmo do tempo, entre notícias, memórias e inquietações, mas sempre com a convicção de que pensar o país implica sair do conforto e também participar nele”.</p><p>Na introdução, 
o jornalista sublinha que a obra resulta da necessidade de organizar aquilo que, ao longo dos anos, tenho vindo a escrever, reflectir 
e partilhar sobre Angola: as suas políticas públicas e os grandes desafios do seu desenvolvimento humano e económico, sem deixar, obviamente, de considerar o contexto geopolítico em que nos vamos inserindo.”</p><p>O prefácio é assinado pelo jornalista, político e nacionalista Aldemiro Vaz da Conceição, que considera a obra “uma leitura apropriada e útil para uma viagem realista sobre como Angola reage à nova ordem mundial”.</p>',
                'date' => '2025-11-04',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:04:28',
                'updated_at' => '2025-11-21 09:43:41',
            ),
            7 =>
            array (
                'id' => 8,
                'image' => '6140eee16e5f2e5ad65dbb9c9edb1afa.jpg',
                'font' => 'DR',
                'title' => 'Angola busca parceria com Egipto no domínio da Cultura',
                'slug' => 'angola-busca-parceria-com-egipto-no-dominio-da-cultura',
                'subtitle' => 'O ministro da Cultura, Filipe Zau, reuniu-se domingo, na cidade do Cairo, com o seu homólogo egípcio, Ahmed Fouad Henno, com quem abordou o estabelecimento de parceria e cooperação no domínio cultural, com enfâse no domínio da formação de quadros e intercambio no sector das artes.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>Durante o encontro, refere uma nota de imprensa, as partes abordaram a forma prática para o estabelecimento da pretendida parceria, estabelecendo, para o efeito, pontos focais para preparar um memorando destinado a identificação de áreas prioritárias de cooperação e consequente assinatura de acordos.</p><p>A troca de informação será conduzida pelas respectivas representações diplomáticas e técnicos, nomeados na ocasião, dos dois ministérios.</p><p>As partes se propõem a apoiar, reciprocamente, 
a participação em projectos de intercâmbio de eventos culturais e artísticos, com realce para as artes contemporâneas, visando a promoção do património e cultura africana.</p><p>A gestão cultural, intercâmbio das artes tradicionais, incluindo música, preservação do património e promoção e divulgação da identidade africana, foram igualmente abordadas durante o encontro, testemunhado pelo embaixador de Angola no Egipto, Maquento Sebastião Lopes, e técnicos da cultura dos dois países.</p><p>O ministro está na cidade do Cairo desde a 
última sexta-feira, onde representou o Presidente da República, João Lourenço, na cerimónia inaugural do Grande Museu Egípcio.</p>',  
                'date' => '2025-11-04',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:07:10',
                'updated_at' => '2025-11-21 09:40:52',
            ),
            8 =>
            array (
                'id' => 9,
                'image' => '5473ea19976753739f0636fb0a89dd84.jpg',
                'font' => 'DR',
                'title' => 'Filipe Zau testemunha inauguração do Grande Museu do Egipto',
                'slug' => 'filipe-zau-testemunha-inauguracao-do-grande-museu-do-egipto',
                'subtitle' => 'O ministro da Cultura, Filipe Zau, testemunhou, este sábado, em representação do Presidente da República, João Lourenço, a inauguração do Grande Museu Egípcio.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>De acordo com uma nota de imprensa, a instituição, que conserva e expõe uma incomparável colecção de tesouros faraônicos, está localizada no Planalto das Pirâmides, Cairo.</p><p>Considerada pelas autoridades egípcias como um evento internacional único, a cerimónia de inauguração foi orientada pelo Presidente do Egipto, Abdel-Fattah El-Sisi, e presenciada por vários líderes, dignatários e figuras da cultura do mundo árabe, de África, da Ásia, da Europa e da América.</p><p>Descrito como um marco 
civilizacional e cultural sem precedentes, o Grande Museu Egípcio oferece uma experiência única, contém mais de 100 mil peças antigas, entre outras valências.</p>',
                'date' => '2025-11-04',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:10:25',
                'updated_at' => '2025-11-21 09:29:08',
            ),
            9 =>
            array (
                'id' => 10,
                'image' => '2c65eb2efe5eafcc04266bec51f0c1d4.jpg',
                'font' => 'DR',
                'title' => 'Criada brigada de vigilância para garantir segurança nos cemitérios de Luanda',
                'slug' => 'criada-brigada-de-vigilancia-para-garantir-seguranca-nos-cemiterios-de-luanda',
            'subtitle' => 'Uma brigada de vigilância para garantir segurança nos cemitérios foi criada, recentemente, no âmbito do Dia dos Finados, que se assinala este domingo, anunciou Governo da Província de Luanda (GPL).',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>Segundo uma nota de imprensa, controla actualmente sete cemitérios legalizados e três ilegais, estes últimos situados na zona do Bita Vacaria. Nos cemitérios regularizados são realizados, em média, de dez a cinquenta funerais por dia, consoante o período.</p><p>Segundo o chefe do Departamento de Serviços Comunitários do Gabinete Provincial do Ambiente, Jacinta Teixeira, citado na mesma nota, a movimentação de cidadãos nos cemitérios tem vindo a aumentar, sobretudo nos dias que antecederam o Dia dos Finados.</p><p>Jacinta Teixeira lamentou ainda a ocorrência de actos de vandalismo em alguns cemitérios, apesar de reconhecer que a situação tem melhorado consideravelmente nos últimos tempos, e referiu que, para prevenir tais práticas, foram criadas brigadas de 
vigilância nos cemitérios, com o apoio da Polícia Nacional.</p><p>‎</p><p>Apelou às famílias e visitantes a que mantenham uma postura 
exemplar e respeitosa nos cemitérios, em homenage m à memória dos que partiram.</p>',
                'date' => '2025-11-04',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:13:54',
                'updated_at' => '2025-11-21 09:53:09',
            ),
            10 =>
            array (
                'id' => 11,
                'image' => '9edb19e10f22042aecd58f551cc14c4f.jpg',
                'font' => 'DR',
                'title' => 'Inaugurado no Uíge Estádio Nacional Vici António para dez mil espectadores',
                'slug' => 'inaugurado-no-uige-estadio-nacional-vici-antonio-para-dez-mil-espectadores',
                'subtitle' => 'O Estádio Nacional Vici António foi inaugurado esta segunda-feira, na província do Uíge, pelo ministro 
da Juventude e Desportos, Rui Falcão.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>“O que inauguramos hoje é mais do que um estádio, é um símbolo e um compromisso com o futuro", disse o ministro da Juntude e Desporto, Rui Falcão, ao intervir na cerimónia de inauguração.</p><p>De acordo com o ministro, a infra-estrutura é também um tributo eterno ao “pequeno mago do Uíge” e uma porta aberta para novos talentos, novas vitórias e novos sonhos.</p>',
                'date' => '2025-11-04',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:18:49',
                'updated_at' => '2025-11-21 09:49:13',
            ),
            11 =>
            array (
                'id' => 12,
                'image' => '925075fa0c45019752ff3e2c1d7d5079.jpg',
                'font' => 'Rafael Tati',
                'title' => 'Proposta de Lei do Orçamento Geral do Estado 2026 entregue à Assembléia Nacional',
                'slug' => 'proposta-de-lei-do-orcamento-geral-do-estado-2026-entregue-a-assembleia-nacional',
                'subtitle' => 'A Proposta de Lei do Orçamento Geral do Estado referente ao exercício económico 2026 foi entregue, esta sexta-feira, ao Parlamento.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>O documento, que prevê receitas e despesas no valor de 33 biliões de Kwanzas, foi entregue pelo ministro de Estado para Coordenação Económica, José de Lima Massano, à presidente da Assembleia Nacional, Carolina Cerqueira.</p><p>O Orçamento Geral do Estado para 2026 foi preparado com base no preço do petróleo de 61 dólares e uma produção petrolífera de 1,05 milhão de barris por dia.</p>',
                'date' => '2025-11-04',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 15:22:03',
                'updated_at' => '2025-11-21 10:00:44',
            ),
            12 =>
            array (
                'id' => 13,
                'image' => 'a4d4d0cb77e4b43f5d7113e2edf97ef5.jpg',
                'font' => 'DR',
                'title' => 'Bengo dispõe de 20 unidades industriais',
                'slug' => 'bengo-dispoe-de-20-unidades-industriais',
                'subtitle' => 'A província do Bengo conta, actualmente, com 20 unidades industriais que se dedicam na produção de vários produtos, inauguradas nos últimos 20 anos.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>A informação foi avançada pela governadora do Bengo, Maria Nelumba, no acto de inauguração da fábrica de silício metálico, que posiciona Angola como potência industrial regional.</p><p>Com esta unidade de produção, Angola deu mais 
um passo firme rumo à industrialização e reforça a confiança internacional na economia nacional, numa altura em que o país celebra 50 
anos de Independência.</p><p>Com uma área total de 50,8 hectares, gerou 850 empregos, a unidade industrial ocupa, nesta primeira fase, cerca de 3,5 hectares. Estão instalados dois fornos com capacidade de produção de 1.000 toneladas de silício metálico por mês cada um, além de sistemas ambientais, subestação elétrica de 220 KVA e centro de tratamento de água com capacidade de 8.000 metros cúbicos.</p>',
                'date' => '2025-11-05',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-11-05 08:18:02',
                'updated_at' => '2025-11-21 09:59:33',
            ),
            13 =>
            array (
                'id' => 14,
                'image' => 'dd1ab6dc2af7d336e372d9e5737fb9e4.jpg',
                'font' => 'Assessorarte',
                'title' => '“Aproveitemos esta oportunidade única para construirmos juntos uma sociedade inclusiva”',
                'slug' => 'aproveitemos-esta-oportunidade-unica-para-construirmos-juntos-uma-sociedade-inclusiva',
                'subtitle' => 'O Presidente da República defendeu, terça-feira, em Luanda, a necessidade de se valorizar mais a paz e 
o processo de reconciliação nacional para a construção de uma sociedade mais inclusiva e com igualdade de oportunidades para todos os 
angolanos.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>João Lourenço lançou o repto durante o discurso proferido no acto central das comemorações do 50.º aniversário da Independência Nacional, realizado na Praça da República, contígua ao Memorial Dr. António Agostinho Neto.</p><p>O Chefe de Estado admitiu que os desafios por resolver no país são enormes e de grande complexidade, tendo, por essa razão, defendido a importância do foco em acções e iniciativas que contribuam para a solução dos problemas que hoje preocupam as populações.</p><p>Sobre este particular, João Lourenço disse que tudo está a ser feito para a resolução dos principais problemas com os quais o país ainda se debate.</p><p>“Estamos a dar passos firmes para romper o ciclo de subdesenvolvimento em que nos situamos”, declarou.</p><p>Entre as acções em curso para o alcance deste desiderato, o Presidente da República destacou as apostas “decisivas” em infra-estruturas de produção 
de energia eléctrica, sem as quais disse ser difícil industrializar o país, em alinhamento com as tecnologias mais modernas do mundo dos nossos dias. Fruto do investimento feito neste domínio, o Chefe de Estado referiu que o país dispõe, neste momento, de uma produção de energia eléctrica suficiente para as actuais necessidades, que se pretende levar a todos os cantos do território nacional, assim como vender aos países limítrofes.</p><p>“Temos procurado atrair investidores interessados na construção de linhas de transmissão e na 
comercialização de energia eléctrica”, realçou.</p><p>O Chefe de Estado apelou aos angolanos a trabalharem juntos para a consolidação 
da economia nacional e para o desenvolvimento económico e social do país, sublinhando que este deve constituir o principal foco. Mas, 
para tal, disse ser fundamental impedir que as disputas e querelas partidárias consumam grande parte do tempo e de energia dos angolanos.</p><p>No quadro do processo de desenvolvimento do país, o Chefe de Estado referiu a importância de se fazer um grande investimento na educação e ensino, acelerar o processo de redução da taxa de analfabetismo, retirar ao máximo as crianças que, por diferentes razões, como carência de escolas, gravidez precoce e outras, se encontram fora do sistema de ensino.</p><p>“Precisamos, por isso, de construir mais infra-estruturas escolares, mas, acima de tudo, investir mais na formação de formadores, de professores para todos os níveis de ensino”, frisou o Presidente da República.</p><p>Nesta equação, o Chefe de Estado falou da importância do trabalho conjunto e da criação da consciência de que o progresso e o desenvolvimento não vêm apenas da acção dos governos, mas, sim, do esforço colectivo e conjugado de toda uma sociedade.</p><p>Apelou, por isso, a todos os angolanos a trabalharem para o fortalecimento do sector privado e cooperativo da economia nacional, com vista à diversificação da economia, do aumento da oferta de bens e serviços, do aumento do leque dos produtos e bens de exportação e do aumento da oferta de emprego.</p><p>Num discurso que recordou os momentos difíceis enfrentados pelo país durante os 50 anos de Independência, o Chefe de Estado disse que, após o período de guerra, elegeu, como prioridade, a resolução dos principais problemas herdados deste conflito, no âmbito de uma definição de prioridades em que, p além da reabilitação das principais infra-estruturas fundamentais para o desenvolvimento, destacou-se, também, o combate à fome, à pobreza e às desigualdades sociais, como centro de todos os esforços e atenções.</p><p>No quadro deste processo, o Presidente da República ressaltou que uma das prioridades passou pela resolução do problema de milhares de deslocados e refugiados, restituindo-lhes um mínimo de condições humanas de vida, para que acreditassem que a paz tinha valido a pena e que tinha chegado a hora de desarmar os espíritos e as mentes, para se dedicarem às tarefas do desenvolvimento.</p><p>O Presidente da República destacou a atenção dedicada pelo Executivo ao sector da Saúde nos últimos anos, com realce para a construção de infra-estruturas hospitalares de alta categoria destinadas a atender um vasto leque de 
especialidades médicas e dotadas de equipamentos e tecnologias modernas.</p><p>Essas infra-estruturas, referiu o Presidente da República, prestam um serviço melhor ao povo angolano. João Lourenço disse que essa aposta no sector da Saúde contempla, também, a formação de mais especialistas nas escolas e universidades e em instituições de referência mundial em outros países.</p><p><strong>Um grande esforço para a desminagem</strong></p><p>O Presidente da República fez saber que o país está a fazer, com o apoio de parceiros internacionais, um grande esforço para a desminagem, com o fim de garantir a livre circulação de pessoas e bens, viabilizar o desenvolvimento de projectos agro-pecuários e a implantação de outros projectos de desenvolvimento económico e social. A meta, frisou, é trabalhar para 
Angola ser declarada livre de minas nos próximos dois anos.</p><p>Além deste passo, disse que o país continua a trabalhar nas reformas para a melhoria contínua do ambiente de negócios, propício à atracção do investimento directo estrangeiro, na diversificação da economia e no aumento da oferta de bens e serviços para consumo doméstico e para a exportação. “Tudo isso tem como objectivo garantir o bem-estar social das nossas populações, através de maior oferta de serviços sociais como o acesso à escola, habitação, água, energia e assistência médica e medicamentosa”, ressaltou.</p><p>A ocasião serviu para o Chefe de Estado falar das várias realizações conseguidas, 
até aqui, pelo país, com destaque para o Corredor do Lobito, que considerou um projecto de grande envergadura, devido ao alcance e benefícios que disse irem muito além das fronteiras angolanas.</p><p>João Lourenço informou que o Corredor do Lobito tem despertado um grande interesse internacional, por causa do “grande potencial” de oportunidades para a realização de negócios com parceiros e investidores estrangeiros para alavancar o desenvolvimento de Angola e tornar a economia nacional mais robusta e mais capaz de responder às ingentes necessidades do país e da África Austral.</p><p>O Presidente da República disse estarem projectados um conjunto “bastante” variado de empreendimentos naquela infra-estrutura, que vão desde o transporte de mercadorias e minérios e o seu escoamento rápido a preços competitivos para o resto do mundo, passando pela agricultura, pelos serviços, até à criação de indústrias relevantes na região.</p><p>“O Corredor do Lobito é um pólo gigantesco de desenvolvimento que vai desempenhar um papel decisivo no conjunto das infra-estruturas essenciais de interconexão em África, no quadro da operacionalização da Zona de Livre Comércio Continental Africano”, declarou.</p><p>A questão das mudanças climáticas é outro tema que mereceu destaque no discurso do Presidente da República. Sobre essa matéria, João 
Lourenço ressaltou que Angola tem procurado contribuir com acções que ajudem a mitigar os efeitos nocivos que daí advêm, com especial 
destaque para a produção de energias limpas, que disse constituir, actualmente, a matriz fundamental da produção energética nacional.</p><p><strong>Apelo para o fim da guerra na Ucrânia</strong></p><p>O Chefe de Estado voltou a advogar&nbsp;o fim da guerra contra a Ucrânia, da resolução do conflito no Médio Oriente, que conduz ao cumprimento das resoluções do Conselho de Segurança das Nações Unidas 
sobre a imperiosa necessidade da criação do Estado da Palestina. Nessa conformidade, João Lourenço referiu que a situação “volátil” nos países do Sahel, as guerras no Sudão e na República Democrática do Congo, que ameaçam a balcanização desses países, devem merecer, igualmente, toda a atenção.</p><p>O Estadista angolano pronunciou-se, também, sobre os golpes de Estado e as mudanças inconstitucionais em África. “Estamos muito preocupados com o recrudescimento e a proliferação de grupos terroristas em determinados pontos do nosso Planeta e de África em particular”, ressaltou.</p><p>O Presidente da República afirmou que a Organização das Nações Unidas está a revelar-se “impotente” para ajudar a impor a ordem e fazer face aos excessos das grandes potências. “Defendemos, firmemente, o multilateralismo, por ser o único modelo inclusivo e capaz de congregar todas as nações do nosso Planeta à volta da abordagem dos grandes temas que afligem este mundo contemporâneo em que vivemos”, acentuou.</p><p>João Lourenço salientou que Angola tem uma sensibilidade muito especial para as questões da guerra, da paz e da liberdade e independência dos povos, por ter passado por essa experiência e por ter vivido várias décadas em conflito.</p><p>Disse ser por essa razão que o país se coloca, sempre, ao dispor dos países em conflito, para contribuir com a sua experiência para a resolução desses problemas, muitos dos quais de grande complexidade. “Pautamos a nossa política externa na necessidade do cumprimento dos princípios de não-agressão, da boa vizinhança, da resolução pacífica dos conflitos pela via negocial, do estrito cumprimento dos princípios da Carta das Nações Unidas e do Direito Internacional”, esclareceu.</p>',
                'date' => '2025-11-12',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-12 10:49:20',
                'updated_at' => '2025-11-21 08:50:51',
            ),
            14 =>
            array (
                'id' => 15,
                'image' => 'd10f34725224225f4931571052b27053.jpg',
                'font' => 'Assessorarte',
                'title' => 'Bandeira de Angola brilha no edifício mais alto de Adis Abeba',
                'slug' => 'bandeira-de-angola-brilha-no-edificio-mais-alto-de-adis-abeba',
                'subtitle' => 'A bandeira de Angola esteve em destaque no edifício mais alto de Adis Abeba, conhecido por CBE Tower, por ocasião do 50.° aniversário da Independência Nacional.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>O edifício é a sede da Commercial Bank of Ethiopia, com 209 metros de altura e 52 andares, soube 
o JA Online de fonte oficial.</p>',
                'date' => '2025-11-12',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-12 10:52:27',
                'updated_at' => '2025-11-21 09:51:39',
            ),
            15 =>
            array (
                'id' => 16,
                'image' => '241dd6a1a36f42e76000b09b466acce3.jpg',
                'font' => 'JA Online',
                'title' => 'Festa dos 50 anos da Independência Nacional termina com corte de bolo',
                'slug' => 'festa-dos-50-anos-da-independencia-nacional-termina-com-corte-de-bolo',
                'subtitle' => 'Depois do acto central alusivo aos 50 anos da Independência Nacional, que decorreu, hoje, na Praça da República, em Luanda, a festa terminou com o corte do bolo pelo Presidente da República, João Lourenço.',
                'detach' => 'normal',
                'status' => 'arquivado',
                'description' => '<p>A jornada, que reuniu delegações estrangeiras e cerca de dez mil convidados nacionais, foi marcada, igualmente, pela utilização do Salão Protocolar da Presidência da República.</p><p>O referido espaço foi, também, o lugar onde as as demais delegações em representação de países amigos e convidados nacionais almoçaram esta terça-feira.</p><p>A inauguração do Salão 
Protocolar da Presidência da República aconteceu, segunda-feira, na Nova Marginal de Luanda.</p>',
                'date' => '2025-11-12',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-12 11:02:41',
                'updated_at' => '2025-11-21 10:03:12',
            ),
            16 =>
            array (
                'id' => 17,
                'image' => 'e5a6952ef2617ea5b2b0f5daa06edf0e.jpg',
                'font' => 'Teresa Cabari | Jornalista',
                'title' => 'Delegações deixam Angola após celebração do Dia da Independência',
                'slug' => 'delegacoes-deixam-angola-apos-celebracao-do-dia-da-independencia',
                'subtitle' => 'Várias delegações deixaram, hoje, Angola e estão de regresso aos países de origem, após a celebração do Dia da Independência, que decorreu na Praça da República, em Luanda.',
                'detach' => 'normal',
                'status' => 'arquivado',
                'description' => '<p>Após o encerramento do acto central, a Presidente da Índia, que se encontrava em Luanda desde o último sábado, despediu-se de Angola e regressou a casa.</p><p>Por sua vez, os homólogos do Zimbabwe, Emmerson Mnangagwa, Namíbia, Nandi Netumbo Nandi-Ndaitwah, Comores, Azali Assoumani, Portugal, Marcelo Rebelo de Sousa, e demais delegações fizeram o mesmo.</p><p>As delegações presidenciais e de Chefes de Estados chegaram ao país, na segunda-feira, e prestigiaram o acto central com a sua presença que "reforça os laços que nos unem há décadas", conforme afirmou o Presidente da República, João Lourenço, enquanto discursava à nação.</p>',
                'date' => '2025-11-12',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-11-12 11:15:13',
                'updated_at' => '2025-11-21 10:05:59',
            ),
            17 =>
            array (
                'id' => 18,
                'image' => 'd0b3c77501eb8a3003f7ce91baec46cc.jpg',
                'font' => 'Assessorarte',
                'title' => 'TAAG recebe terceiro Boeing 787 Dreamliner',
                'slug' => 'taag-recebe-terceiro-boeing-787-dreamliner',
            'subtitle' => 'A Transportadora Aérea de Angola (TAAG) recebeu, terça-feira, em Luanda, no Aeroporto Internacional Dr. António Agostinho Neto (AIAAN), a terceira aeronave Boeing 787 Dreamliner.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>A nova aeronave é o primeiro equipamento do modelo 787-10 a integrar a frota da TAAG. De acordo com o comunicado que o Jornal de Angola teve acesso, a incorporação da nova aeronave, em regime de leasing, reflecte o ambicioso processo de modernização e renovação da frota, um factor crítico de sucesso na jornada de transformação das Linhas Aéreas de Angola.&nbsp;</p><p>O comunicado adianta que esta aeronave com a matrícula D2-TES, com capacidade para 367 passageiros, 24 em classe executiva e 343 
em classe económica.</p><p>Com esta aquisição, a aeronave junta-se aos modelos Boeing 787-9 e Boeing 787-10 incorporados pela TAAG durante este ano. O Boeing 787-10 representa a versão mais moderna e avançada da família Dreamliner, para além de possuir maior capacidade de transporte de passageiros e carga. A mesma garante também níveis optimizados de eficiência de combustível.</p><p>Com aquisição do modelo 787 Dreamliner, a TAAG demonstra o seu compromisso com a sustentabilidade ambiental, através de uma significativa redução nas 
emissões de gases nocivos para a atmosfera.</p><p>Esta aeronave de última geração não só reforçará a conectividade para os destinos de longo-curso existentes, como também dará suporte à prospecção de novas rotas, conforme previsto no Plano Estratégico 2024- 2029 da TAAG.&nbsp;</p><p>A nota indica que a aeronave 787 Dreamliner destaque-se pela sua recepção e ter a fuselagem o selo dos 50 anos da Independência de Angola, por ter pisado o solo angolano, na data da festa nacional.</p><p>Com este novo equipamento, a TAAG reafirma o seu compromisso com a excelência operacional, melhoria da experiência do passageiro e reforço da conectividade a uma escala global.</p><p><br>&nbsp;</p>',
                'date' => '2025-11-12',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-11-12 11:19:09',
                'updated_at' => '2025-11-21 09:36:23',
            ),
            18 =>
            array (
                'id' => 19,
                'image' => 'b97deb4b5da805819f6e03f793fff257.jpg',
                'font' => 'Assessorarte',
                'title' => 'Angola demonstra força e unidade nacional diante da Selecção da Argentina',
                'slug' => 'angola-demonstra-forca-e-unidade-nacional-diante-da-seleccao-da-argentina',
                'subtitle' => 'O Presidente da República, João Lourenço, considerou, este sábado, que Angola demonstrou força, resiliência, orgulho e unidade nacional diante da Selecção da Argentina, campeã mundial, que carrega como marca o melhor do mundo, Lionel Messi.',
                'detach' => 'destaque',
                'status' => 'publicado',
                'description' => '<p>Numa mensagem publicada na sua conta oficial do Facebook, o Chefe de Estado sublinhou que, desta 
forma, no âmbito das festividades dos 50 anos, a Nação angolana mostrou ao mundo as suas potencialidades e a forma como celebra a sua 
cultura, o desporto e recebe os seus visitantes.</p><p>"Um agradecimento especial à Selecção da Argentina que não hesitou em juntar-se à nossa festa. O Desporto une paixões, aproxima povos, firma alianças e celebra a vida e a humanidade. Estamos juntos", escreveu João Lourenço.</p>',
                'date' => '2025-11-15',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:03:49',
                'updated_at' => '2025-11-21 09:38:29',
            ),
            19 =>
            array (
                'id' => 20,
                'image' => 'a3856ffd5d6aeada904d85675d7e9c38.jpg',
                'font' => 'Assessorarte',
                'title' => 'Palancas Negras dão trabalho à Argentina em dia de tolerância',
                'slug' => 'palancas-negras-dao-trabalho-a-argentina-em-dia-de-tolerancia',
                'subtitle' => 'Em dia de tolerância, na província de Luanda, as Palancas Negras deram trabalho aos Campeões do Mundo, 
Argentina, que se tiveram de aplicar para ganhar, por 0-2, no 11 de Novembro, com golos de Lautaro e Messi.',
                'detach' => 'normal',
                'status' => 'publicado',
            'description' => '<p>Na última sexta-feira, a formação albiceleste teve uma pequena demonstração do carinho e do calor dos adeptos angolanos o que levou Lionel Scaloni a dizer na antevisão da partida com a Selecção Nacional de Honras que o sentimento vivido no seio do grupo era de satisfação.</p><p>O respeito pelo conjunto às ordens de Patrice Beaumelle também ficou patente, afinal de contas o técnico argentino foi o primeiro a destacar o valor das Palancas Negras e o talento dos múltiplos jogadores que actuam em diferentes campeonatos europeus.</p><p>A festa dos milhares que acorreram ao estádio foi audível e o nome de Lionel Messi foi o mais aplaudido e o mais ovacionado do dia.</p><p>Perante as críticas à realização do encontro, houve quem mostrasse o descontentamento a partir das bancadas, mas a festa da Dipanda e a fraternidade entre angolanos, argentinos e outros aficcionados da bola falou mais alto.</p><p>&nbsp;</p><p>Quanto aos protagonistas no relvado, Angola teve razões para se orgulhar depois de revelar um maior entrosamento, transições rápidas, solidariedade e uma actuação física na primeira parte com Maestro, Rui Modesto, Zito e Tó Carneiro a darem indicações muito positivas.</p><p>Ao minuto 19, Lionel Messi quase abriu o marcador, mas Hugo Marques parou o remate.</p><p>Aos 37 minutos, Tó Carneiro visou a baliza de Gerónimo Rulli, mas foi por cima da barra.</p><p>Ainda antes do intervalo, Messi descobriu Lautaro Martinez para o golo inaugural aos 43 minutos.</p><p>&nbsp;</p><p>O público queria mais e gritava pelo 10 da albiceleste que se recriava com bola quando tinha espaço.</p><p>Aos 65 minutos, um choque aparatoso entre Thiago Almada e um jogador angolano obrigou a entrada da equipa médica.</p><p>Aos 70 minutos, teve mesmo de ser substituído por lesão para entrada de Emiliano Buendía.</p><p>Porém, foi preciso esperar até aos 82 minutos para que por fim Lionel Messi introduzisse a bola no fundo das redes e em uníssono os angolanos gritassem golo como se fosse a sua Selecção a marcar.</p><p>A festa terminou, mas não sem Patrice Beaumelle ter lançado Manuel Benson, Mabululu, Ary Papel, Show, Neblú, Núrio Fortuna e do lado argentino estreias para Kevin Mac Allister (irmão de Alexis), Gianluca Prestianni, Joaquin Panichelli, e Maximo Perrone, além de mais alguns minutos para Flaco López.</p><p>O balanço da partida foi positivo para ambas equipas, 
numa altura em que os pupilos de Lionel Scaloni fizeram o último desafio do ano enquanto Angola fez um ensaio antes do Campeonato Africano das Nações no Reino de Marrocos.</p><p>Se tivesse de atribuir o prémio de melhor jogador da partida, a distinção teria de ir para Messi por ter feito um golo e uma assistência ou para Lautaro Martinez que também fez um golo e uma assistência.</p>',
                'date' => '2025-11-15',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:07:17',
                'updated_at' => '2025-11-21 09:47:03',
            ),
            20 =>
            array (
                'id' => 21,
                'image' => '97f560f796f0691daf30601c355fb892.jpg',
                'font' => 'Assessorarte',
                'title' => 'Lionel Scaloni: "Não teria problema algum de jogar novamente com Angola"',
                'slug' => 'lionel-scaloni-nao-teria-problema-algum-de-jogar-novamente-com-angola',
                'subtitle' => 'O técnico da Argentina, Lionel Scaloni, elogiou, hoje, o bom desempenho da Selecção Nacional de Honras 
e assegurou que "não teria problema algum de jogar novamente com Angola", embora saiba que não depende de si o agendamento desse duelo.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>"Aprendemos sempre quando jogamos um jogo contra adversários que não conhecemos tão bem e tão fortes fisicamente como Angola", explicou Scaloni à imprensa, citado pela Tyc Sports.</p><p>O seleccionador da albiceleste disse, igualmente, que foi um bom teste porque a Selecção Nacional de Honras tem jogadores rápidos.</p><p>"Creio que estivemos à altura do jogo, pese embora que em alguns momentos podíamos ter feito melhor", acrescentou.</p><p>Por outro lado, frisou, também, que "tentámos disputar 
o encontro com as nossas armas", mas foi um duelo difícil como antecipou.</p><p>Por último, o timoneiro dos Campeões do Mundo agradeceu, ainda, pelo apoio do povo angolano que torce pela Argentina e pela recepção calorosa com que foram recebidos no país.</p><p>&nbsp;</p>',
                'date' => '2025-11-15',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:13:49',
                'updated_at' => '2025-11-21 09:30:39',
            ),
            21 =>
            array (
                'id' => 22,
                'image' => '9a0c4bd30c3a6e08d12b1e494bf1d2a8.jpg',
                'font' => 'Assessorarte',
                'title' => 'Detida jovem acusada de sequestrar filho da amiga',
                'slug' => 'detida-jovem-acusada-de-sequestrar-filho-da-amiga',
            'subtitle' => 'O Serviço de Investigação Criminal (SIC) deteve, uma jovem, de 29 anos, acusada de ter sequestrado um menor de dois meses de idade, no município da Camama, em Luanda.',
                'detach' => 'normal',
                'status' => 'publicado',
                'description' => '<p>De acordo com uma nota, consultada, hoje, pelo JA Online, o crime ocorreu quando acusada entrou na casa da vítima que se encontrava a dormir com a sua progenitora em companhia da sua irmã, tirando o recém-nascido e levando consigo.</p><p>Na sequência, após ter constatado o desaparecimento do bebé, a progenitora acordou a irmã, que afirmou ter visto uma pessoa trajada de preto sair do quarto em direcção ao quintal, carregando algo ao colo.</p><p>‎</p><p>‎A testemunha tentou seguir a suspeita, po
rém sem sucesso, devido a ra pidez com que esta se deslocou, alcançando rapidamente a via pública. Já na rua, algumas pessoas relataram ter visto uma mulher com as mesmas características, vestida de preto a transportar uma criança, que posteriormente se pôs a correr em direcção a uma zona escura.</p><p>‎</p><p>‎Na sequência da denúncia, seis dias depois, o SIC localizou a bebé e a suposta sequestrad
ora no&nbsp;interior de uma residência no bairro C alemba 2, município do Kilamba Kiaxi. Durante a operação, foi possível resgatar o recém-nascido em segurança, tendo sido imediatamente restituído à sua progenitora.</p><p>‎</p><p>‎Segundo as investigações, a cidadã pe
rdeu recentemente, a gravidez e, temendo a reacção do marido que regressava de viagem, decidiu raptar o filho da amiga para apresentá-lo como se fosse seu, numa tentativa de manter o relacionamento conjugal.</p>',
                'date' => '2025-11-15',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-11-15 18:18:22',
                'updated_at' => '2025-11-21 09:26:14',
            ),
            22 =>
            array (
                'id' => 23,
                'image' => '7774c98c85836ad50afe780369ac8357.jpg',
                'font' => 'tgrt',
                'title' => 'wreghrtew',
                'slug' => 'wreghrtew',
                'subtitle' => 'wergew',
                'detach' => 'normal',
                'status' => 'rascunho',
                'description' => '<p>grewgewrgwe</p>',
                'date' => '2025-11-21',
                'category_id' => 1,
                'deleted_at' => '2025-11-21 09:43:06',
                'created_at' => '2025-11-21 08:36:24',
                'updated_at' => '2025-11-21 09:43:06',
            ),
        ));
    }
}
