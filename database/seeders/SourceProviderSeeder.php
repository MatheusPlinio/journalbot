<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SourceProvider;

class SourceProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $providers = [
            ['name' => 'Folha de S.Paulo', 'slug' => 'folha', 'logo_url' => null],
            ['name' => 'Folha - Em Cima da Hora', 'slug' => 'folha-emcimadahora', 'logo_url' => null],
            ['name' => 'UOL', 'slug' => 'uol', 'logo_url' => null],
            ['name' => 'R7 Notícias', 'slug' => 'r7', 'logo_url' => null],
            ['name' => 'Estadão', 'slug' => 'estadao', 'logo_url' => null],
            ['name' => 'O Globo', 'slug' => 'oglobo', 'logo_url' => null],
            ['name' => 'G1', 'slug' => 'g1', 'logo_url' => null],
            ['name' => 'EBC', 'slug' => 'ebc', 'logo_url' => null],
            ['name' => 'Brasil 247', 'slug' => 'brasil247', 'logo_url' => null],
            ['name' => 'Pragmatismo Político', 'slug' => 'pragmatismo-politico', 'logo_url' => null],
            ['name' => 'Repórter Brasil', 'slug' => 'reporter-brasil', 'logo_url' => null],
            ['name' => 'The Intercept Brasil', 'slug' => 'the-intercept', 'logo_url' => null],
            ['name' => 'Nexo Jornal', 'slug' => 'nexo', 'logo_url' => null],
            ['name' => 'Gazeta do Povo', 'slug' => 'gazeta-do-povo', 'logo_url' => null],
            ['name' => 'Correio Braziliense', 'slug' => 'correio-braziliense', 'logo_url' => null],
            ['name' => 'Correio do Povo', 'slug' => 'correio-do-povo', 'logo_url' => null],
            ['name' => 'Jornal de Brasília', 'slug' => 'jornal-de-brasilia', 'logo_url' => null],
            ['name' => 'Correio 24h (Bahia)', 'slug' => 'correio24h', 'logo_url' => null],
            ['name' => 'Campo Grande News', 'slug' => 'campo-grande-news', 'logo_url' => null],
            ['name' => 'O Tempo', 'slug' => 'o-tempo', 'logo_url' => null],
            ['name' => 'O Povo', 'slug' => 'o-povo', 'logo_url' => null],
            ['name' => 'Terra Notícias', 'slug' => 'terra', 'logo_url' => null],
            ['name' => 'Metrópoles', 'slug' => 'metropoles', 'logo_url' => null],
            ['name' => 'CNN Brasil', 'slug' => 'cnn-brasil', 'logo_url' => null],
            ['name' => 'BBC Brasil', 'slug' => 'bbc-brasil', 'logo_url' => null],
            ['name' => 'Agência Brasil', 'slug' => 'agencia-brasil', 'logo_url' => null],
            ['name' => 'IHU - Instituto Humanitas', 'slug' => 'ihu', 'logo_url' => null],
            ['name' => 'Carta Capital', 'slug' => 'carta-capital', 'logo_url' => null],
            ['name' => 'Veja', 'slug' => 'veja', 'logo_url' => null],
            ['name' => 'Exame', 'slug' => 'exame', 'logo_url' => null],
        ];

        foreach ($providers as $provider) {
            SourceProvider::create($provider);
        }
    }
}
