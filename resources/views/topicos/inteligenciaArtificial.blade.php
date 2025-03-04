<x-app-layout>
<body class="theme-blue-light bg text" cz-shortcut-listen="true">


        @include('layouts/header')


        <main id="pjax-wrapper" class="transition-fade">


                <header class="overflow-hidden">
                        <div class="theme-blue-dark bg text">
                                <div class="container pt-8 md:pt-16 pb-space-6">
                                        <div 
                                                class="inline-flex px-20 bg-interactive-on-background text-primary rounded">
                                                <nav aria-label="migalha de pão">

                                                        <h2 id="BreadcrumbNavLabel" class="outline-none sr-only">
                                                                <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                                Navegação de trilha de navegação
                                                                        </font>
                                                                </font>
                                                        </h2>


                                                        <ul class="flex justify-start gap-x-12 min-h-48 items-center"
                                                                aria-labelledby="BreadcrumbNavLabel">
                                                                <li
                                                                        class="flex items-center gap-x-12 f-body-1 after:content-['/']">
                                                                        <a href="../../topics/topics.html"
                                                                                class="f-ui-1 underline-transparent hover:underline-inherit underline-offset-6 transition whitespace-nowrap">
                                                                                <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                                style="vertical-align: inherit;">
                                                                                                Tópicos
                                                                                        </font>
                                                                                </font>
                                                                        </a>
                                                                </li>
                                                        </ul>
                                                </nav>
                                        </div>



                                        <h1 class="outline-none mt-space-8 f-display-1 lg:w-10-cols text-secondary">
                                                <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                                Inteligencia artificial
                                                        </font>
                                                </font>
                                        </h1>


                                        <div
                                                class="md:w-10-cols xl:w-7-cols mt-space-5 text-secondary f-body-2 empty:m-0">
                                                <p>
                                                        <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Transformando indústrias, ampliando capacidades e potencializando eficiências, a inteligência artificial já está impactando nossas vidas de maneira profunda. As possibilidades para o futuro parecem ser infinitas.</font>
                                                        </font>
                                                </p>
                                        </div>


                                </div>
                        </div>



                </header>


                <main class="relative">
                    <div class="container mx-auto px-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-space-5">
                            @foreach($noticias as $noticia)
                                <div class="md:w-10-cols xl:w-7-cols text-secondary">
                                    <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                                        @if($noticia->linkImg)
                                            <div class="aspect-w-16 aspect-h-9">
                                                <img src="{{ $noticia->linkImg }}" 
                                                     alt="{{ $noticia->titulo }}" 
                                                     class="w-full h-full object-cover">
                                            </div>
                                        @endif
                                        
                                        <div class="p-6">
                                            <h2 class="f-display-2 mb-4">{{ $noticia->titulo }}</h2>
                                            <div class="f-body-2 mb-4">{{ $noticia->resumo }}</div>
                                            <div class="text-sm text-gray-500">
                                                {{ \Carbon\Carbon::parse($noticia->dtPublicacao)->format('d/m/Y') }}
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </main>

                


                <div class="theme-blue-light -mb-space-10 pb-space-10 bg text">

                        <div>


                                <div class="block-container-full">
                                        <div class="block-layer">
                                                <div class="relative flex flex-col group text-primary transition">
                                                        <div class="cols-container">
                                                                <div class="hidden w-12-cols lg:block 2xl:hidden">
                                                                        <header
                                                                                class="container pb-space-4 border-b border-subtle  ">

                                                                                <h2 id="WhattoExpectatCES2025"
                                                                                        class="outline-none text-secondary f-heading-5">
                                                                                        <font
                                                                                                style="vertical-align: inherit;">

                                                                                        </font>
                                                                                </h2>

                                                                        </header>


                                                                        <div class="w-10-cols mt-space-5 f-heading-7">
                                                                                <p>
                                                                                        <font
                                                                                                style="vertical-align: inherit;">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        Google introduz "marca d'água" para sinalizar conteúdo gerado por IA.
                                                                                                </font>
                                                                                        </font>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div
                                                                        class="w-12-cols lg:w-6-cols lg:mt-32 xl:mt-48 2xl:mt-0">
                                                                        <div class="lg:hidden 2xl:block">
                                                                                <header
                                                                                        class="container pb-space-4 border-b border-subtle  ">

                                                                                        <h2 id="WhattoExpectatCES2025"
                                                                                                class="outline-none text-secondary f-heading-5">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">

                                                                                                </font>
                                                                                        </h2>

                                                                                </header>


                                                                                <div class="mt-space-5 f-heading-7">
                                                                                        <p>
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">

                                                                                                </font>
                                                                                        </p>
                                                                                </div>
                                                                        </div>

                                                                        <div class="mt-32 md:mt-40 lg:mt-0 2xl:mt-48">
                                                                                <div class="rich-text ">
                                                                                        <p>
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                Em um esforço para garantir o uso seguro e responsável da IA, grandes empresas de tecnologia, como Google, Microsoft e Amazon, assinaram um acordo voluntário nos EUA comprometendo-se a adicionar marcas d'água em conteúdos gerados por IA. A medida visa aumentar a transparência e ajudar na identificação de imagens e vídeos criados por algoritmos. A Meta também segue a tendência, implementando marcas d'água em seu novo gerador de vídeos. Enquanto isso, na China, o uso de marcas d'água em criações de IA é agora obrigatório, com empresas como Alibaba já adotando a prática. A necessidade de padronização e coordenação entre as empresas é um tema central, com especialistas destacando a importância de monitorar os impactos dessas iniciativas.
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>
                                                                                </div>







                                                                        </div>
                                                                </div>


                                                                <div class="w-12-cols lg:w-6-cols mt-40 md:mt-48 lg:mt-32 xl:mt-48 2xl:mt-0">

                                                                        <div class="relative ">                                        
                                                                                        <img class="w-full h-full aspect-16/9 rounded video-js vjs-paused vjs-controls-enabled vjs-workinghover vjs-v8 vjs-user-active vjs-layout-medium bc-player-G9w6yOa2YM_default bc-player-G9w6yOa2YM_default-index-0 vjs-mouse vjs-plugins-ready vjs-player-info vjs-contextmenu-ui vjs-viewability vjs-errors vjs-thumbnails vjs-hide-controls vjs-controls-disabled bc-player-G9w6yOa2YM_default-index-1"
                                                                                        src="{{ url('/assets/media/google.webp') }}">

                                                                                        <script
                                                                                                src="https://players.brightcove.net/5629323166001/G9w6yOa2YM_default/index.min.js"></script>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>

                                        </div>
                                </div>








                                <div class="theme-inverse mt-space-9 flex flex-col pb-space-8 bg text">
                                        <section class="mt-space-9 ">
                                                <div class="container">
                                                        <div class="container ">
                                                                <div class="xl:w-10-cols max-w-full text-primary f-heading-7">
                                                                        <p>
                                                                                <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                                style="vertical-align: inherit;">
                                                                                                IA auxilia na detecção precoce de um tipo comum de arritmia cardíaca</font>
                                                                                </font>
                                                                        </p>
                                                                </div>
                                                        </div>

                                                        <div class="grid lg:grid-cols-2 gap-x-gutter gap-y-space-7 mt-space-7">
                                                                <div class="pr-space-6">
                                                                        <div class="rich-text ">
                                                                                <p>
                                                                                        <font
                                                                                                style="text-align: justify;">
                                                                                                <font
                                                                                                        style="text-align: justify;">
                                                                                                        
                                                                                                        Um projeto brasileiro que utiliza inteligência artificial (IA) para a detecção de arritmias cardíacas foi premiado com o Gartner Eye on Innovation 2024, um importante reconhecimento global de inovação, em outubro. Desenvolvido pelo Hospital Nove de Julho, em colaboração com a Johnson & Johnson MedTech e a startup Neomed, o projeto resultou em um aumento de 82,3% no número de pacientes tratados para fibrilação atrial na instituição. Essa condição é o tipo mais comum de arritmia cardíaca, afetando cerca de 2,5% da população, segundo a Sociedade Brasileira de Cardiologia (SBC).
                                                                                                </font>
                                                                                        </font>
                                                                                </p>
                                                                                                <p>
                                                                                                        <font>
                                                                                                                <font>
                                                                                                                        Iniciado em 2023, o projeto de inovação aberta com o uso de IA tem como objetivo identificar precocemente e tratar pacientes com fibrilação atrial em um modelo de cuidado digitalizado. Raphael Oliveira, diretor-geral do Hospital Nove de Julho, explica à CNN que a fibrilação atrial, além de ser a arritmia mais frequente, tem se tornado mais prevalente com o envelhecimento da população, impactando a qualidade de vida dos pacientes e aumentando o risco de problemas cardíacos e acidentes vasculares cerebrais (AVC).

                                                                                                                        Com um ano de implementação, o uso da IA no projeto resultou em um aumento de 82,3% no número de pacientes tratados para fibrilação atrial, uma melhoria de 30% na qualidade de vida dos pacientes acompanhados e uma redução de 43 pontos percentuais na procura por pronto-socorro em pacientes monitorados durante um período de 30 dias.
                                                                                                                </font>
                                                                                                        </font>
                                                                                                </p>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <div class="relative flex flex-col h-full group p-16 pb-24 lg:p-24 rounded-lg bg-layer text-primary transition group/card">
                                                                                <div class="relative mb-space-4">
                                                                                        <div class="flex justify-center items-center h-full aspect-16/9">
                                                                                                <img src="{{ url('/assets/media/medico.jpg') }}"
                                                                                                        alt=""
                                                                                                        
                                                                                                        class="w-full h-full object-cover rounded-md">
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>
                                </div>
                                
                          

                                        <br><br><br><br><br>
                                        <div class="block-layer">
                                                <div class="relative flex flex-col group text-primary transition">
                                                        <div class="cols-container">
                                                                <div class="hidden w-12-cols lg:block 2xl:hidden">
                                                                        <header class="container pb-space-4 border-b border-subtle  ">

                                                                                <h2 id="WhattoExpectatCES2025" class="outline-none text-secondary f-heading-5">
                                                                                        <font style="vertical-align: inherit;">

                                                                                        </font>
                                                                                </h2>

                                                                        </header>


                                                                        <div class="w-10-cols mt-space-5 f-heading-7">
                                                                                <p>
                                                                                        <font style="vertical-align: inherit;">
                                                                                                <font style="vertical-align: inherit;">
                                                                                                        Após 25 anos, a Intel será substituida pela Nvidea
                                                                                                </font>
                                                                                        </font>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="w-12-cols lg:w-6-cols lg:mt-32 xl:mt-48 2xl:mt-0">
                                                                        <div class="lg:hidden 2xl:block">
                                                                                <header class="container pb-space-4 border-b border-subtle  ">

                                                                                        <h2 id="WhattoExpectatCES2025" class="outline-none text-secondary f-heading-5">
                                                                                                <font style="vertical-align: inherit;">

                                                                                                </font>
                                                                                        </h2>

                                                                                </header>


                                                                                <div class="mt-space-5 f-heading-7">
                                                                                        <p>
                                                                                                <font style="vertical-align: inherit;">

                                                                                                </font>
                                                                                        </p>
                                                                                </div>
                                                                        </div>

                                                                        <div class="mt-32 md:mt-40 lg:mt-0 2xl:mt-48">
                                                                                <div class="rich-text ">
                                                                                        <p>
                                                                                                <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">
                                                                                                                A Nvidia, gigante de chips no epicentro da revolução da inteligência artificial, será incluída no prestigiado índice Dow Jones, substituindo a rival Intel a partir de 8 de novembro. A inclusão da Nvidia no índice de blue chips reflete o impacto do crescimento impulsionado pela IA, que fez o valor da empresa disparar 900% nos últimos dois anos. O Dow Jones era o único grande índice de ações dos EUA a não ter a Nvidia entre suas componentes. <br>

                                                                                                                A Intel, que foi adicionada ao Dow Jones em novembro de 1999, junto com empresas como Microsoft, SBC e Home Depot, deixa o índice após 25 anos. No entanto, a Intel tem enfrentado desafios recentes, com um plano de reestruturação que inclui redução de gastos, cortes de empregos e suspensão de dividendos. Suas ações caíram 54% em 2024, e caíram mais 2% após o fechamento da última sexta-feira. Nos últimos quatro anos, a Intel também passou por duas divisões de suas ações, sendo a mais recente em junho, quando cada ação foi dividida por dez. <br>
                                                                                                                
                                                                                                                Apesar da diminuição da influência do Dow ao longo do tempo, à medida que os investidores se orientam por índices baseados em valor de mercado, o índice ainda se mantém como um dos principais termômetros da força econômica dos Estados Unidos.
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>
                                                                                </div>







                                                                        </div>
                                                                </div>


                                                                <div class="w-12-cols lg:w-6-cols mt-40 md:mt-48 lg:mt-32 xl:mt-48 2xl:mt-0">

                                                                        <div class="relative ">                                        
                                                                                        <img class="w-full h-full aspect-16/9 rounded video-js vjs-paused vjs-controls-enabled vjs-workinghover vjs-v8 vjs-user-active vjs-layout-medium bc-player-G9w6yOa2YM_default bc-player-G9w6yOa2YM_default-index-0 vjs-mouse vjs-plugins-ready vjs-player-info vjs-contextmenu-ui vjs-viewability vjs-errors vjs-thumbnails vjs-hide-controls vjs-controls-disabled bc-player-G9w6yOa2YM_default-index-1" src="{{ url('/assets/media/intel.jpg') }}">

                                                                                        <script src="https://players.brightcove.net/5629323166001/G9w6yOa2YM_default/index.min.js"></script>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>

                                        </div>

                                       

                                        <div class="theme-inverse mt-space-9 flex flex-col pb-space-8 bg text">

                                                <section class="mt-space-9 ">
                                                       
        
        
                                                        <div class="container">
                                                                <div class="container ">
                                                                        <div
                                                                                class="xl:w-10-cols max-w-full text-primary f-heading-7">
                                                                                <p>
                                                                                        <font style="vertical-align: inherit;">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        
                                                                                        Presidente do SoftBank afirma
                                                                                        que a superinteligência
                                                                                        artificial poderá existir até
                                                                                        2035.
                                                                                </font>
                                                                                        </font>
                                                                                </p>
                                                                        </div>
                                                                </div>
        
        
                                                                <div
                                                                        class="grid lg:grid-cols-2 gap-x-gutter gap-y-space-7 mt-space-7">
                                                                        <div class="pr-space-6">
                                                                                <div class="rich-text ">
                                                                                        <p>
                                                                                                <font
                                                                                                        style="text-align: justify;">
                                                                                                        <font
                                                                                                                style="text-align: justify;">
                                                                                                                
                                                                                                                O presidente-executivo do SoftBank Group, Masayoshi Son, reafirmou nesta terça-feira (29) sua convicção de que a superinteligência artificial (ASI) será uma realidade em breve, destacando que isso exigirá investimentos de centenas de bilhões de dólares. Durante uma conferência em Riad, na Arábia Saudita, ele afirmou que a ASI será 10 mil vezes mais inteligente do que o cérebro humano e deverá surgir até 2035.
 <br>
                                                                                                                Son mencionou que está reservando recursos "para dar o próximo grande passo", embora não tenha revelado detalhes sobre seus planos de investimento. Ele também previu que a IA generativa demandará um investimento acumulado de 900 trilhões de dólares em data centers e chips, destacando que acredita que a fabricante de chips Nvidia está subvalorizada com base nessa projeção. <br>Reconhecido por suas apostas bem-sucedidas em tecnologias inovadoras, como a internet móvel e o comércio eletrônico, Son também tem um histórico misto como investidor. O lançamento dos Vision Funds do SoftBank, em 2017, causou grande impacto no capital de risco, mas muitas das startups apoiadas por esses fundos sofreram uma queda significativa em seu valor. Até o final de junho de 2024, os Vision Funds registraram uma perda de 2,4 bilhões de dólares.
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>
                                                                                       
                                                                                  
                                                                                            
                                                                                                
                                                                                              
                                                                                     
                                                                                </div>
        
        
                                                                                
                                                                        </div>
        
                                                                        <div>
        
                                                                                <div
                                                                                        class="relative flex flex-col h-full group p-16 pb-24 lg:p-24 rounded-lg bg-layer text-primary transition group/card">
                                                                                       
        
        
                                                                                        <div class="relative mb-space-4">
                                                                                                <div
                                                                                                        class="flex justify-center items-center h-full aspect-16/9">
                                                                                                        <img src="{{ url('/assets/media/super.webp') }}"
                                                                                                                alt=""
                                                                                                                
                                                                                                                class="w-full h-full object-cover rounded-md">
                                                                                                </div>
        
        
                                                                                        </div>
        
        
                                                                                    
        
        
        
        
        
                                                                                       
                                                                                </div>
        
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </section>
        
        
                                        </div>


                                <div class="block-container-full">
                                        <div class="block-layer">
                                 


                                                <section class="mt-space-7">
                                                        <header
                                                                class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                                                <h2 id="AIbytheNumbersatCES2024"
                                                                        class="outline-none text-tertiary f-heading-2">
                                                                        <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                        IA em números 2024
                                                                                </font>
                                                                        </font>
                                                                </h2>

                                                        </header>



                                                        <div class="container">
                                                                <ul
                                                                        class=" grid grid-cols-1 lg:grid-cols-3 gap-y-24 gap-x-space-1">
                                                                        <li class="">



                                                                                <div class="relative h-full text-primary transition "
                                                                                        data-behavior="StatAnimation">
                                                                                        <p class="sr-only">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                Mais de
                                                                                                                43 mil
                                                                                                                leitores
                                                                                                                listaram
                                                                                                                a IA
                                                                                                                como um
                                                                                                                interesse
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>

                                                                                        <div aria-hidden="true">
                                                                                                <div
                                                                                                        class="flex items-baseline f-numeral">
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        4
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        3
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                7
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                8
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                9
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                E
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                +
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        participantes
                                                                                                                        da
                                                                                                                        indústria
                                                                                                                        listaram
                                                                                                                        a
                                                                                                                        IA
                                                                                                                        como
                                                                                                                        um
                                                                                                                        interesse
                                                                                                                </font>
                                                                                                        </font>
                                                                                                </span>
                                                                                        </div>
                                                                                </div>


                                                                        </li>
                                                                        <li class="">



                                                                                <div class="relative h-full text-primary transition "
                                                                                        data-behavior="StatAnimation">
                                                                                        <p class="sr-only">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                63% dos
                                                                                                                participantes
                                                                                                                interessados
                                                                                                                ​​são
                                                                                                                executivos
                                                                                                                de alto
                                                                                                                nível
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>

                                                                                        <div aria-hidden="true">
                                                                                                <div
                                                                                                        class="flex items-baseline f-numeral">
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        6
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        3
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                7
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                8
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                9
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                %
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        dos
                                                                                                                        participantes
                                                                                                                        interessados
                                                                                                                        ​​são
                                                                                                                        executivos
                                                                                                                        de
                                                                                                                        alto
                                                                                                                        nível
                                                                                                                </font>
                                                                                                        </font>
                                                                                                </span>
                                                                                        </div>
                                                                                </div>


                                                                        </li>
                                                                        <li class="">



                                                                                <div class="relative h-full text-primary transition "
                                                                                        data-behavior="StatAnimation">
                                                                                        <p class="sr-only">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                63% dos
                                                                                                                participantes
                                                                                                                têm uma
                                                                                                                base de
                                                                                                                clientes
                                                                                                                
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>

                                                                                        <div aria-hidden="true">
                                                                                                <div
                                                                                                        class="flex items-baseline f-numeral">
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        7
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                7
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        9
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                7
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                8
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                9
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                5
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                6
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                7
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                8
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                9
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                %
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        dos
                                                                                                                        participantes
                                                                                                                        têm
                                                                                                                        uma
                                                                                                                        base
                                                                                                                        de
                                                                                                                        clientes
                                                                                                                       
                                                                                                                </font>
                                                                                                        </font>
                                                                                                </span>
                                                                                        </div>
                                                                                </div>


                                                                        </li>
                                                                        <li class="">



                                                                                <div class="relative h-full text-primary transition "
                                                                                        data-behavior="StatAnimation">
                                                                                        <p class="sr-only">
                                                                                                <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                Mais de
                                                                                                                4 mil
                                                                                                                leitores
                                                                                                                listaram
                                                                                                                a IA
                                                                                                                como
                                                                                                                tópico
                                                                                                                de
                                                                                                                interesse
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>

                                                                                        <div aria-hidden="true">
                                                                                                <div
                                                                                                        class="flex items-baseline f-numeral">
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        4
                                                                                                                                </font>
                                                                                                                        </font>
                                                                                                                </span>

                                                                                                                <div class="absolute top-0 left-20 animate-number-ticker"
                                                                                                                        data-statanimation-item="">
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                0
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                                class="block text-center">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                3
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>

                                                                                                                        <span
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                4
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                E
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                        <span>
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                +
                                                                                                                        </font>
                                                                                                                </font>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                      leitores
                                                                                                                        da
                                                                                                                        mídia
                                                                                                                        listaram
                                                                                                                        a
                                                                                                                        IA
                                                                                                                        como
                                                                                                                        tópico
                                                                                                                        de
                                                                                                                        interesse
                                                                                                                </font>
                                                                                                        </font>
                                                                                                </span>
                                                                                        </div>
                                                                                </div>


                                                                        </li>
                                                                </ul>
                                                        </div>

                                                </section>

                                        </div>
                                </div>





                        </div>




                </div>

        </main>



        @include('layouts.footer')




</x-app-layout>