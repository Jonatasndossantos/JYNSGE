<?php

namespace Database\Seeders;

use App\Models\Categoria;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nome' => 'Internet', 'descricao' => 'Em nenhum outro lugar você pode ver o quadro completo de como a tecnologia sem fio de amanhã a tecnologia está transformando a eficiência, elevando as experiências do usuário e nos impulsionando rumo a um mundo totalmente conectado.'],
            ['nome' => 'Acessibilidade', 'descricao' => 'Descubra como avanços como assistentes de IA, dispositivos domésticos inteligentes, ativação por voz, mudanças no design inclusivo e muito mais estão melhorando a vida das pessoas com habilidades diferentes.'],
            ['nome' => 'AR/VR/XR', 'descricao' => 'As tecnologias que transformaram os jogos estão agora mudando o jogo em outras indústrias e remodelando a forma como as empresas operam em todo o mundo.'],
            ['nome' => 'Inteligência Artificial', 'descricao' => 'Indústrias em transformação. Abrindo novos recursos. Melhorando a eficiência. A inteligência artificial já está melhorando nossas vidas de maneiras profundas – e as possibilidades para o futuro são aparentemente ilimitadas.'],
            ['nome' => 'Conteúdo e Entretenimento', 'descricao' => 'Saiba mais sobre as inovações que lideram a transformação do entretenimento, no lugar onde se reúnem marcas que sabem gerar buzz.'],
            ['nome' => 'Saúde Digital', 'descricao' => 'Explore os avanços mais recentes em IA, IoT, telessaúde e soluções de saúde digital. Essas tecnologias inovadoras estão remodelando a prestação de cuidados de saúde, melhorando os resultados dos pacientes e aumentando a eficiência operacional.'],
            ['nome' => 'Criptomoedas', 'descricao' => 'No cenário financeiro atual, tecnologia é dinheiro. Este é o momento de abraçar a inovação como a nova moeda - e um investimento valioso no futuro bancário.'],
            ['nome' => 'Tecnologia Alimentar', 'descricao' => 'Descubra as deliciosas possibilidades criadas pelas inovações na agricultura, segurança, nutrição, sabor, embalagem, sustentabilidade e muito mais, e saiba o que está por vir no futuro da alimentação.'],
            ['nome' => 'Jogos e Esportes', 'descricao' => 'Entre no jogo e veja de perto a próxima geração de hardware, software e acessórios que melhoram a experiência do usuário.'],
            ['nome' => 'Robótica', 'descricao' => 'Explore as tecnologias robóticas que melhoram a segurança, estabelecem metas de sustentabilidade ao nosso alcance e, em última análise, criam um mundo melhor.'],
            ['nome' => 'Casa Inteligente', 'descricao' => 'Descubra as inovações que combinam perfeitamente conveniência, eficiência e consciência ecológica, redefinindo o que significa viver de forma inteligente.'],
            ['nome' => 'Tecnologia Espacial', 'descricao' => 'Os avanços na tecnologia de exploração espacial estão melhorando a previsão do tempo, conectividade através de sistemas de satélite e muito mais.'],
            ['nome' => 'Eventos', 'descricao' => 'Eventos de tecnologia são o palco onde o futuro ganha forma, conectando mentes inovadoras e impulsionando ideias que irão transformar o mundo.'],
            ['nome' => 'Tecnologia Veicular', 'descricao' => 'Desde veículos autônomos e conectados até avanços no transporte aéreo, a tecnologia transformou a maneira como vivenciamos a mobilidade.'],
            ['nome' => 'Automação', 'descricao' => 'Desde veículos autônomos e conectados até avanços no transporte aéreo, a tecnologia transformou a maneira como vivenciamos a mobilidade.']
        ]);

    }
}
