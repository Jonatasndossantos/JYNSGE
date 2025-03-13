<x-app-layout>


<body class="theme-blue-light bg text" cz-shortcut-listen="true">

        <span data-behavior="Track"
                data-track-data="{&quot;content_type&quot;:&quot;topic&quot;,&quot;article_type&quot;:&quot;&quot;,&quot;authors&quot;:[],&quot;topics&quot;:[],&quot;updated_date&quot;:&quot;11/5/2024&quot;}"
                data-track-onpageload="true"></span>

        <script type="text/javascript" defer="" src="../../app/assets/app-CkMw2zri.js"></script>


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
                                                                        <a href="{{route('topicos.index')}}"
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
                                                            {{ $topico->nome }}
                                                        </font>
                                                </font>
                                        </h1>


                                        <div
                                                class="md:w-10-cols xl:w-7-cols mt-space-5 text-secondary f-body-2 empty:m-0">
                                                <p>
                                                        <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                        {{ $topico->descricao}}
                                                                </font>
                                                        </font>
                                                </p>
                                        </div>


                                </div>
                        </div>
                </header>


                <div class="theme-blue-light -mb-space-10 pb-space-10 bg text">

                        <div>

                            @forelse($noticias as $noticia)
                            <a href="{{ route('noticias.show', $noticia) }}" class="flex items-center">
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
                                                                                                        {{ $noticia->titulo }}
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
                                                                                                                {{ $noticia->resumo }}
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>
                                                                                </div>
                                                                        </div>
                                                                </div>


                                                                @if($noticia->linkImg)
                                                                <div class="w-12-cols lg:w-6-cols mt-40 md:mt-48 lg:mt-32 xl:mt-48 2xl:mt-0">

                                                                        <div class="relative ">                                        
                                                                                        <img class="w-full h-full aspect-16/9 rounded video-js vjs-paused vjs-controls-enabled vjs-workinghover vjs-v8 vjs-user-active vjs-layout-medium bc-player-G9w6yOa2YM_default bc-player-G9w6yOa2YM_default-index-0 vjs-mouse vjs-plugins-ready vjs-player-info vjs-contextmenu-ui vjs-viewability vjs-errors vjs-thumbnails vjs-hide-controls vjs-controls-disabled bc-player-G9w6yOa2YM_default-index-1"
                                                                                        src="{{ asset('storage/' . $noticia->linkImg) }}">
                                                                                            
                                                                                            
                                                                                            <script
                                                                                            src="https://players.brightcove.net/5629323166001/G9w6yOa2YM_default/index.min.js"></script>
                                                                                        </div>
                                                                                        
                                                                                </div>
                                                                @endif
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                            </a>
                            @empty
                                <p>Nenhuma notícia encontrada nesta categoria.</p>
                            @endforelse








                             
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
                                                                                               
                                                                                        A Clone Robotics revoluciona a tecnologia ao desenvolver um robô humanoide equipado com músculos artificiais, oferecendo movimentos mais naturais e ágeis.
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
                                                                                                        
                                                                                                        
A Clone Robotics apresentou seu novo torso humanoide inovador, que promete transformar os padrões da robótica. De acordo com o Gadgets Nerds, o robô é equipado com músculos artificiais projetados para replicar os movimentos humanos, visando ser um dos primeiros (se não o primeiro) a oferecer movimentos fluídos e precisos. 
                                                                                                </font>
                                                                                        </font>
                                                                                </p>
                                                                               
                                                                          
                                                                                    
                                                                                                <p>
                                                                                                        <font>
                                                                                                                <font>
                                                                                                                        Ao contrário dos robôs tradicionais, que possuem movimentos rígidos e mecânicos, este modelo se aproxima da sutileza e precisão dos gestos humanos, o que pode torná-lo uma ferramenta valiosa em áreas como a medicina, realizando procedimentos médicos, ou em tarefas que exigem montagens complexas de equipamentos que desafiam os limites físicos do ser humano.
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
                                                                                                <img src="{{ url('/assets/media/torso.jpg') }}"
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
                                                                                                       
                                                                                        Conheça o 'Iron': robô humanoide
                                                                                        feito na China com 200 graus de
                                                                                        liberdade
                                                                                
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
                                                                                                                A XPENG, fabricante chinesa de veículos elétricos, deu um passo importante ao apresentar o Iron, seu primeiro robô humanoide. Esse lançamento representa a expansão da empresa além do mercado automotivo, explorando novas frentes na robótica e inteligência artificial (IA), um movimento semelhante ao que a Tesla tem seguido. <br>

                                                                                                                O Iron é equipado com mais de 60 articulações e 200 graus de liberdade, permitindo a execução de movimentos complexos com alta precisão. De acordo com a XPENG, a tecnologia por trás do robô é inspirada nos recursos já aplicados em seus veículos elétricos, destacando a convergência entre automação e robótica na empresa. <br>
                                                                                                                
                                                                                                                Realiza movimentos complexos e é alimentado pelo chip Turing AI, capaz de processar até 30 bilhões de parâmetros, simulando a flexibilidade humana. Com 1,75 m de altura e 70 kg, o robô já está sendo usado nas linhas de produção da XPENG, ajudando na montagem do P7+. O desempenho do Turing AI, que completou mais de 2.700 testes em 40 dias, coloca a XPENG em uma posição competitiva no mercado de robôs humanoides.
                                                                                                        </font>
                                                                                                </font>
                                                                                        </p>
                                                                                </div>







                                                                        </div>
                                                                </div>


                                                                <div class="w-12-cols lg:w-6-cols mt-40 md:mt-48 lg:mt-32 xl:mt-48 2xl:mt-0">

                                                                        <div class="relative ">                                        
                                                                                        <img class="w-full h-full aspect-16/9 rounded video-js vjs-paused vjs-controls-enabled vjs-workinghover vjs-v8 vjs-user-active vjs-layout-medium bc-player-G9w6yOa2YM_default bc-player-G9w6yOa2YM_default-index-0 vjs-mouse vjs-plugins-ready vjs-player-info vjs-contextmenu-ui vjs-viewability vjs-errors vjs-thumbnails vjs-hide-controls vjs-controls-disabled bc-player-G9w6yOa2YM_default-index-1" src="{{ url('/assets/media/robo.webp') }}">

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
                                                                                                        
                                                                                     
                                                                                                        Projeto GR00T: NVIDIA aumentará
                                                                                                        a destreza e mobilidade do robô
                                                                                                        com nova IA e ferramentas de
                                                                                                        simulação
                                                                                                
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
                                                                                                                
                                                                                                                A NVIDIA lançou o Projeto GR00T, um modelo-base de uso geral para robôs humanoides, com o objetivo de avançar nas inovações em robótica e IA. Juntamente com o GR00T, a empresa apresentou o Jetson Thor, um novo computador para robôs, baseado no sistema em um chip (SoC) NVIDIA Thor, e atualizações para a plataforma NVIDIA Isaac™, incluindo IA generativa e ferramentas de simulação. <br><br> O Jetson Thor oferece desempenho de IA de ponta, com 800 teraflops, e foi desenvolvido para permitir que os robôs aprendam habilidades como coordenação e adaptação ao interagir com o ambiente. A NVIDIA está colaborando com empresas líderes em robótica, como Boston Dynamics, XPENG Robotics e outras.
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
                                                                                                        <img src="{{ url('/assets/media/groot.webp') }}"
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

                                                                <h2 id="CESbytheNumbers"
                                                                        class="outline-none text-tertiary f-heading-2">
                                                                        <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                        Numeros em robotica
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
                                                                                                                138 mil
                                                                                                                participantes
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
                                                                                                                                        1
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
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
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        8
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                8
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
                                                                                                                1442
                                                                                                                startups
                                                                                                                dentro
                                                                                                                do
                                                                                                                Eureka
                                                                                                                Park
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
                                                                                                                                        1
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
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
                                                                                                                                        2
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        startups
                                                                                                                        envolvidas
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
                                                                                                                4312
                                                                                                                expositores
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
                                                                                                        <div
                                                                                                                class="relative -mx-20 px-20 overflow-hidden">
                                                                                                                <span
                                                                                                                        class="invisible">
                                                                                                                        <font
                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        1
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                1
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
                                                                                                                                        2
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
                                                                                                                                class="absolute bottom-0 translate-y-full">
                                                                                                                                <font
                                                                                                                                        style="vertical-align: inherit;">
                                                                                                                                        <font
                                                                                                                                                style="vertical-align: inherit;">
                                                                                                                                                2
                                                                                                                                        </font>
                                                                                                                                </font>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <span
                                                                                                        class="block f-subhead-1">
                                                                                                        <font
                                                                                                                style="vertical-align: inherit;">
                                                                                                                <font
                                                                                                                        style="vertical-align: inherit;">
                                                                                                                        expositores
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


      
</body>
</x-app-layout>