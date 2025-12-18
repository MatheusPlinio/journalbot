<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sources')->delete();
        
        \DB::table('sources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Senado Federal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Correio Braziliense',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Migalhas',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Agência Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'G1',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'www.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Gazeta do Povo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Centro de Operações Rio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Portal da Assembleia Legislativa de Minas Gerais',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CNN Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'O Globo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'R7',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'InfoMoney',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Money Times',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Revista Oeste',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'TudoCelular.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Adrenaline',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Canaltech',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Notícias da TV',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'UOL',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Meu Timão',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Clube de Regatas do Flamengo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Midiamax',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Folha de S.Paulo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Valor Econômico',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'UOL Notícias',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Estadão',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Metrópoles',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Notícias de hoje - IOL',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'BBC',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Jovem Pan',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'TST',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Portal do Estado do Rio Grande do Sul',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Consultor Jurídico',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'STJ - Superior Tribunal de Justiça',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'educacao.rs.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Portal Unicamp',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Portal UFGD',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Secretaria de Estado de Educação de Minas Gerais',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Governo de RO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'alerj.rj.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'IGP-RS',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Exército Brasileiro',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Epagri/Ciram',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            44 => 
            array (
                'id' => 45,
            'name' => 'Confederação Nacional de Municípios (CNM)',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'TCE-SC',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'TRT-MG',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Brigada Militar',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'CFESS',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Tribunal de Justiça de Santa Catarina',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Prefeitura de Catalão',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Fenajufe',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Prefeitura Municipal de Contagem',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Prefeitura de Curitiba',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'seduc.ce.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Notícias da UFSC',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Secretaria de Educação de Pernambuco',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'OAB/RS',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'MPMG',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'educacao.sp.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Prefeitura de Campina Grande',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Extra online',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'UOL Economia',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'AUTOO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Rádio Itatiaia',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'NeoFeed',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'O TEMPO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'pipelinevalor',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Brazil Journal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Investing.com Brasil - Finanças, Câmbio e Investimentos',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Investidor10',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Canal Rural',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Poder360',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Valor Investe',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'JR - JORNAL DA REGIÃO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'sampi.net.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Forbes Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Portal Contabeis',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'AEROIN',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Diário do Rio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'SuperVia',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'ConvergenciaDigital',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Mundo do Automóvel para PCD',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'abcz.org.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'O Dia',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Governo do Paraná',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'agenciasebrae.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Conheça Santa Catarina',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Agência de Notícias do Acre',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Tribuna do Norte',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'BM&C News',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'CPG Click Petróleo e Gás',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'DW',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Notícias Agrícolas',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Diário do Poder',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Diário do Nordeste',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Revista Fórum',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'paraiba.pb.gov.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => '- Bahia Economica',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'O Antagonista',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Poços Já',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Correio do Povo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Movimento Econômico',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Diário da Região',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Terra',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Farmnews',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Cointribune',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'FOLHAMAX',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Jornal de Negócios',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'TecMundo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Blog Gran Cursos Online',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'GameVicio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Tecnoblog',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Diário do Comércio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Campo Grande News',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Portal Onda Sul',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Portal da Cidade - Pouso Alegre / MG',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Banda B',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'ES Fala',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'A Gazeta',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'VEJA',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Globo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Climatempo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Concursos no Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Um só Planeta',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'GZH',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Xataka',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Agora No Vale',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'aRede',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Olhar Digital',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Inovação Tecnológica',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'purepeople.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Globo Rural',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Imirante.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'A Tribuna',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Secretaria Municipal de Educação',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Diário do Centro do Mundo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Space Today',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Portal 6',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'UFSM – Universidade Federal de Santa Maria',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'DOL',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Brasil 61',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Super Rádio Tupi',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'FAPERGS',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Aventuras na História',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Superinteressante',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Folha PE',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Jornal O Impacto',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Outras Palavras',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Minha Vida: saúde',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Peperi.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Jornal Correio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'gmconline.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'LANCE!',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Sport Club Internacional',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Sport Club do Recife',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'NSC Total',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'atletico.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Trivela',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Bolavip Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Santistas',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Bahia Notícias',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Antenados no Futebol',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'FogãoNET',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'netflu.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'tntsports.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'NE45',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'UmDois Esportes',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'SuperVasco',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'ge',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'O Liberal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'soutimao.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Goal.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'CBF',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Diário Celeste',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Nação Tricolor',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Coluna do Fla',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'NETVASCO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'ESPN Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'No Ataque',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Liga Nacional de Basquete',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Lakers Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'SportyTrader',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Portal Morada',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Gazeta Esportiva',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Garrafão Rubro-negro',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'sportbuzz.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'O Jogo',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Maisfutebol',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'SAPO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Record',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'RTP',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Jornal de Notícias',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'O País - A verdade como notícia',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'CBN',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'gshow.globo.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ELLE Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Omelete',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Crunchyroll',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'R7 Entretenimento',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Bnews',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'portalleodias.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'iG Gente',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Portal Uai',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'iG Queer',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'O Vício',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'IstoÉ',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Alagoas 24 Horas',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Heloisa Tolipan',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Hugo Gloss',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Igor Miranda',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'SouBH',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'contigo.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'AdoroCinema',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'OFuxico',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'TNOnline',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'CARAS Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'IGN Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Moviecom',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Legião dos Heróis',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'CinePOP Cinema',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Olhar Conceito',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Revista Piauí',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Saiba Mais',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'SIC Notícias',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'papelpop',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'A Terra é Redonda',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Tem Londrina',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Revista Bula',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Recreio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'BHAZ',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Tudo Radio',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'POPline',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Whiplash.Net Rock e Heavy Metal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Billboard Brasil',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => '4oito',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'ac24horas',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'São Carlos Agora',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Enfoco',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Rádio Capinzal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Capital do Pantanal',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Tribuna de Petrópolis',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Expresso',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'vangfm.com.br',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Rádio Mirador',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Tenho Mais Discos Que Amigos',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'portaleducadora.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'CartaCapital',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Blog do Esmael',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Pleno.News',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Brasil 247',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'MidiaNews',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Portal ON',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'GP1',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'O Pantaneiro',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Portal iG',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'O POVO',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'TNH1',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Blog do Elvis',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Cidadesnanet.com',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Portal Na Boca da Noite',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'SCC10',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Acontece Botucatu',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'A TARDE',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'onda poços',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Rádio Vale do Minho',
                'created_at' => '2025-12-18 00:45:59',
                'updated_at' => '2025-12-18 00:45:59',
            ),
        ));
        
        
    }
}