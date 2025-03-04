<x-app-layout>

    <body class="theme-blue-light bg text" cz-shortcut-listen="true">
        <span data-behavior="Track"
            data-track-data="{&quot;content_type&quot;:&quot;homepage&quot;,&quot;article_type&quot;:&quot;&quot;,&quot;authors&quot;:[],&quot;topics&quot;:[],&quot;updated_date&quot;:&quot;10/7/2024&quot;}"
            data-track-onpageload="true">
        </span>

        <script type="text/javascript" defer="" src="{{ url ('assets/app-BpZz5RQ0.js')}}"></script>

        @include('layouts/header')


        <main id="pjax-wrapper" class="transition-fade">


            <div class="relative min-h-[35rem] w-full bg-default text-primary -mt-116 md:-mt-120"
                data-behavior="HomeHero"
                style="background: url({{ url ('assets/media/slogan.gif')}}) no-repeat center; background-size: 100% 100%;">
                <div class="sticky top-0 flex flex-row justify-center items-center w-full h-lvh text-center">
                    <div class="relative container z-5 animate-up">

                        <h1 class="outline-none f-display-1">

                        </h1>

                        <p class="lg:w-10-cols 2xl:w-8-cols mx-auto f-body-4 mt-24 lg:mt-32"></p>

                    </div>

                    <div class="absolute inset-0 overflow-hidden transform-gpu"
                        style="background: url('{{URL ('assets/media/slogan.gif')}} no-repeat center center; background-size: cover;">
                        <div
                            class="hidden xl:block absolute top-full left-0 z-1 w-11/12 2xl:w-10/12 min-w-[1135px] aspect-1/1 -translate-x-1/2 -translate-y-1/2 pointer-events-none">

                            <div class="absolute inset-0 top-full bg-hero-gradient-1" data-homehero-gradients=""
                                style="top: 5%; translate: none; rotate: none; scale: none; transform: translate(5.6375%, 3.8024%);">
                            </div>
                        </div>
                        <div
                            class="absolute top-full left-1/2 z-3 w-11/12 2xl:w-10/12 min-w-[1200px] ml aspect-1/1 -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                            <div class="absolute inset-0 top-full bg-hero-gradient-3 md:bg-hero-gradient-2"
                                data-homehero-gradients=""
                                style="top: 10%; translate: none; rotate: none; scale: none; transform: translate(5.6375%, 3.8024%);">
                            </div>
                        </div>
                        <div
                            class="hidden md:block absolute top-full left-full z-2 w-11/12 2xl:w-10/12 min-w-[1425px] aspect-1/1 -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                            <div class="absolute inset-0 top-full bg-hero-gradient-3" data-homehero-gradients=""
                                style="top: 6%; translate: none; rotate: none; scale: none; transform: translate(5.6375%, 3.8024%);">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sticky bottom-0 inset-x-0 transform-gpu aspect-9/16 lg:aspect-16/9 translate-y-hero-media-sm lg:translate-y-hero-media-lg"
                    data-homehero-media-wrapper=""
                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 582.264px, 0px);">
                    <div class="w-8-cols md:w-6-cols-vw lg:w-8-cols-vw h-full mx-auto" data-homehero-media-inner=""
                        style="width: 68.3527%;">
                        <div class="h-full overflow-hidden" data-behavior="VideoToggle">
                            <video autoplay="" muted="" loop="" playsinline=""
                                src="{{URL ('assets/media/Projeto Redimensionar vídeo.mp4')}}"
                                class="w-full h-full object-cover hidden lg:block rounded" data-videotoggle-video=""
                                data-homehero-media="" stream-captured="true">
                                Your browser does not support the video tag.
                            </video>

                            <video autoplay="" muted="" loop="" playsinline=""
                                src="{{URL ('assets/media/fw4bpulg/24-cta-2523_ces25-homepage_1080x1920.mp4')}}"
                                class="lg:hidden w-full h-full object-cover rounded" data-videotoggle-video=""
                                data-homehero-media="">
                                Your browser does not support the video tag.
                            </video>


                            <button type="button"
                                class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 absolute bottom-16 right-24 z-3 bg-on-image"
                                data-behavior="Track" data-track-event="button_click"
                                data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}"
                                aria-label="Pause video">


                                <svg class="icon-transition " width="24" height="24" aria-hidden="true">
                                    <use xlink:href="#pause-filled-24"></use>
                                </svg>

                            </button>

                        </div>
                    </div>
                </div>
            </div>


            <div>

                <div>







                    <div class="block-container-full">
                        <div class="">


                            <div class="container">
                                <ul class=" grid grid-cols-1 md:grid-cols-2 gap-space-1">
                                    <li class="">


                                        <div
                                            class="relative flex flex-col h-full rounded-lg bg-layer text-primary transition p-16 lg:p-24 group/card theme-dark">
                                            <a href="https://www.mwcbarcelona.com/" target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="New Keynote Announcement"></a>

                                            <div class="flex flex-col h-full">

                                                <div class="relative mb-space-4">
                                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                                        <img src="{{URL ('assets/media/mwc.webp')}}"
                                                            alt="Evento MWC2024"
                                                            class="w-full h-full object-cover rounded-md">
                                                    </div>


                                                </div>


                                                <div class="flex flex-col flex-grow">
                                                    <span class="block mb-space-3 f-ui-1 text-tertiary">JYNSGE
                                                        MWC25 </span>


                                                    <h3 class="outline-none f-heading-5">
                                                        MWC25 Barcelona
                                                    </h3>


                                                    <div class="mt-16 text-secondary f-body-2">
                                                        <p>Coisas
                                                            incríveis
                                                            já estão
                                                            em
                                                            andamento
                                                            no maior
                                                            e mais
                                                            influente
                                                            evento
                                                            de
                                                            conectividade
                                                            do
                                                            mundo.
                                                            <br><br><br>
                                                            <strong>
                                                                3
                                                                a
                                                                6
                                                                de
                                                                março
                                                                de
                                                                2025<br>
                                                                Fira
                                                                Gran
                                                                Vía,
                                                                Barcelona</strong>
                                                        </p>
                                                    </div>

                                                    <div class="mt-auto pt-space-6">
                                                        <span
                                                            class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                            aria-hidden="true">
                                                            <span
                                                                class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                                <span class="flex justify-center w-40 ">
                                                                    <svg width="24" height="24" aria-hidden="true">
                                                                        <use xlink:href="#arrow-right-24">
                                                                        </use>
                                                                    </svg>

                                                                </span>

                                                                <span class="flex justify-center w-40">
                                                                    <svg width="24" height="24" aria-hidden="true">
                                                                        <use xlink:href="#arrow-right-24">
                                                                        </use>
                                                                    </svg>

                                                                </span>
                                                            </span>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </li>
                                    <li class="">


                                        <div
                                            class="relative flex flex-col h-full rounded-lg bg-layer text-primary transition p-16 lg:p-24 group/card theme-dark">
                                            <a href="https://rio.websummit.com/" target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Registration for JYNSGE 2025 is Open"></a>

                                            <div class="flex flex-col h-full">

                                                <div class="relative mb-space-4">
                                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                                        <img src="{{URL ('assets/media/summit.jpg')}}"
                                                            alt="foto do evento Summit2024."
                                                            class="w-full h-full object-cover rounded-md">
                                                    </div>


                                                </div>


                                                <div class="flex flex-col flex-grow">
                                                    <span class="block mb-space-3 f-ui-1 text-tertiary">JYNSGE
                                                        WebSummitRio</span>


                                                    <h3 class="outline-none f-heading-5">
                                                        Web Summit Rio
                                                    </h3>


                                                    <div class="mt-16 text-secondary f-body-2">
                                                        <p>
                                                            maior
                                                            evento
                                                            de
                                                            tecnologia
                                                            do mundo
                                                            <br>
                                                            Em 2024,
                                                            reunimos
                                                            mais de
                                                            34 mil
                                                            pessoas
                                                            –
                                                            incluindo
                                                            mais de
                                                            500
                                                            palestrantes
                                                            e mais
                                                            de 1.000
                                                            startups
                                                            – no Web
                                                            Summit
                                                            Rio.<br><br><strong>27
                                                                a
                                                                30
                                                                de
                                                                abril
                                                                de
                                                                2025<br>Rio
                                                                de
                                                                Janeiro,
                                                                Brasil</strong>

                                                        </p>
                                                    </div>

                                                    <div class="mt-auto pt-space-6">
                                                        <span
                                                            class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                            aria-hidden="true">
                                                            <span
                                                                class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard group-hover/card:-translate-y-full group-hover/card-feature:-translate-y-full">
                                                                <span class="flex justify-center w-40 translate-y-full">
                                                                    <svg width="24" height="24" aria-hidden="true">
                                                                        <use xlink:href="#arrow-up-right-24">
                                                                        </use>
                                                                    </svg>

                                                                </span>

                                                                <span class="flex justify-center w-40">
                                                                    <svg width="24" height="24" aria-hidden="true">
                                                                        <use xlink:href="#arrow-up-right-24">
                                                                        </use>
                                                                    </svg>

                                                                </span>
                                                            </span>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>








                    <div class="block-container-full">
                        <section class="">
                            <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                <h2 class="outline-none text-secondary f-heading-5">
                                    Parceiros
                                </h2>

                            </header>



                            <div class="container">
                                <ul
                                    class="grid two-row-scroll-grid -my-32 py-32 md:my-0 py-0 -mx-outer-gutter px-outer-gutter md:mx-0 md:px-0 overflow-x-auto md:overflow-x-visible lg:grid lg:grid-cols-4 gap-space-1">
                                    <li class="w-8-cols-vw md:w-12-cols">



                                        <div
                                            class="relative h-full bg-layer text-primary rounded transition py-20 px-64 md:py-32 md:px-80 lg:py-32 lg:px-56 xl:py-40 xl:px-88 group/card">
                                            <a href="https://www.sp.senac.br/senac-sao-bernardo-do-campo"
                                                target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Brunswick Corporation"></a>


                                            <div class="relative aspect">
                                                <div class="flex justify-center items-center h-full">
                                                    <img src="{{URL ('assets/media/senac.jfif')}}"
                                                        alt="foto da logo do senac"
                                                        class="max-w-full max-h-full object-contain">
                                                </div>


                                            </div>

                                        </div>


                                    </li>
                                    <li class="w-8-cols-vw md:w-12-cols">



                                        <div
                                            class="relative h-full bg-layer text-primary rounded transition py-20 px-64 md:py-32 md:px-80 lg:py-32 lg:px-56 xl:py-40 xl:px-88 group/card">
                                            <a href="https://www.microsoft.com/pt-br" target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Goodyear Tire &amp; Rubber Company"></a>


                                            <div class="relative aspect">
                                                <div class="flex justify-center items-center h-full">
                                                    <img src="{{URL ('assets/media/micro.png')}}"
                                                        alt="foto da logo da microsoft" style="margin-top: 40%;"
                                                        class="max-w-full max-h-full object-contain">
                                                </div>


                                            </div>

                                        </div>


                                    </li>
                                    <li class="w-8-cols-vw md:w-12-cols">



                                        <div
                                            class="relative h-full bg-layer text-primary rounded transition py-20 px-64 md:py-32 md:px-80 lg:py-32 lg:px-56 xl:py-40 xl:px-88 group/card">
                                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="LG Electronics"></a>


                                            <div class="relative aspect">
                                                <div class="flex justify-center items-center h-full">
                                                    <img src="{{URL ('assets/media/html.png')}}" width="108px"
                                                        style="height:120px; margin-top: 18%;"
                                                        alt="foto da logo do HTML"
                                                        class="max-w-full max-h-full object-contain">
                                                </div>


                                            </div>

                                        </div>


                                    </li>
                                    <li class="w-8-cols-vw md:w-12-cols">



                                        <div
                                            class="relative h-full bg-layer text-primary rounded transition py-20 px-64 md:py-32 md:px-80 lg:py-32 lg:px-56 xl:py-40 xl:px-88 group/card">
                                            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="L'Oreal"></a>


                                            <div class="relative aspect">
                                                <div class="flex justify-center items-center h-full">
                                                    <img src="{{URL ('assets/media/cs.png')}}" width="110px"
                                                        style="height:120px; margin-top: 18%;" alt="foto da logo do CSS"
                                                        class="max-w-full max-h-full object-contain">
                                                </div>


                                            </div>

                                        </div>


                                    </li>

                                </ul>
                            </div>

                        </section>

                    </div>



                    <div>


                        <div class="block-container-full">
                            <section class="">
                                <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                    <h2 class="outline-none text-secondary f-heading-5">
                                        Palestras
                                    </h2>

                                </header>


                                <div class="container mb-space-7">

                                </div>


                                <div class="container">
                                    <ul class=" grid grid-cols-1 lg:grid-cols-3 gap-space-1">
                                        <li class="">


                                            <div
                                                class="relative flex flex-col h-full rounded-lg bg-layer text-primary transition p-16 md:px-24 lg:pb-24 lg:px-16 group/card ">
                                                <a href="https://lp.startse.com/eventos/ai-day/?utm_term=&amp;utm_campaign=%5BProdutos+Online%5D+Search_Institucional_StartSe+%7C+Branding+%7C+DSA&amp;utm_source=adwords&amp;utm_medium=ppc&amp;hsa_acc=5481106700&amp;hsa_cam=20882968210&amp;hsa_grp=162193679452&amp;hsa_ad=685272764591&amp;hsa_src=g&amp;hsa_tgt=aud-1730477686759:dsa-19959388920&amp;hsa_kw=&amp;hsa_mt=&amp;hsa_net=adwords&amp;hsa_ver=3&amp;gad_source=1&amp;gclid=Cj0KCQiAlsy5BhDeARIsABRc6Zuug-bTOiEB2B3E23bM4im2B35bkZuDm0rLg0LrZOTTU_DTSx_NyckaAkjOEALw_wcB"
                                                    target="_blank"
                                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                    aria-label="For Attendees"></a>

                                                <div
                                                    class="grid grid-cols-1 lg:flex lg:flex-col lg:h-full gap-x-gutter md:grid-cols-2">

                                                    <div class="relative mb-12 md:mb-0 lg:mb-16 [&amp;_>div]:h-auto">
                                                        <div
                                                            class="flex justify-center items-center h-full aspect-16/9">
                                                            <img src="{{URL ('assets/media/start.jpg')}}"
                                                                alt="Logo do evento StartSe"
                                                                class="w-full h-full object-cover rounded-md">
                                                        </div>


                                                    </div>


                                                    <div class="flex flex-col flex-grow">


                                                        <h3 class="outline-none f-heading-4">
                                                            StartSe
                                                        </h3>


                                                        <div class="mt-16 text-secondary f-body-2">
                                                            <p>Nesta 2ª
                                                                edição,
                                                                você
                                                                verá
                                                                10
                                                                estudos
                                                                de
                                                                caso
                                                                reais
                                                                de
                                                                grandes
                                                                empresas
                                                                que
                                                                estão
                                                                na
                                                                vanguarda
                                                                na
                                                                implementação
                                                                e
                                                                utilização
                                                                da
                                                                IA
                                                                com
                                                                escala
                                                                nos
                                                                resultados.<br>
                                                                Contando
                                                                com
                                                                a
                                                                presença
                                                                de
                                                                Diego
                                                                Barreto,
                                                                Ricardo
                                                                Wagner,
                                                                Paulo
                                                                Camargo,
                                                                entre
                                                                outros.
                                                            </p>
                                                        </div>

                                                        <div class="mt-auto pt-space-6">
                                                            <span
                                                                class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                                aria-hidden="true">
                                                                <span
                                                                    class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                                    <span class="flex justify-center w-40 ">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>

                                                                    <span class="flex justify-center w-40">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>
                                                                </span>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </li>
                                        <li class="">


                                            <div
                                                class="relative flex flex-col h-full rounded-lg bg-layer text-primary transition p-16 md:px-24 lg:pb-24 lg:px-16 group/card ">
                                                <a href="https://www.festivalpath.com.br/" target="_blank"
                                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                    aria-label="For Exhibitors"></a>

                                                <div
                                                    class="grid grid-cols-1 lg:flex lg:flex-col lg:h-full gap-x-gutter md:grid-cols-2">

                                                    <div class="relative mb-12 md:mb-0 lg:mb-16 [&amp;_>div]:h-auto">
                                                        <div
                                                            class="flex justify-center items-center h-full aspect-16/9">
                                                            <img src="{{URL ('assets/media/path.jpg')}}"
                                                                alt="foto sobre o festival path "
                                                                class="w-full h-full object-cover rounded-md">
                                                        </div>


                                                    </div>


                                                    <div class="flex flex-col flex-grow">


                                                        <h3 class="outline-none f-heading-4">
                                                            Festival
                                                            Path
                                                            2025
                                                        </h3>


                                                        <div class="mt-16 text-secondary f-body-2">
                                                            <p>O Festival
                                                                Path
                                                                2025
                                                                ocorrerá
                                                                nos
                                                                dias
                                                                25
                                                                e
                                                                26
                                                                de
                                                                maio
                                                                de
                                                                2025
                                                                em
                                                                São
                                                                Paulo,
                                                                Brasil.
                                                                Este
                                                                evento
                                                                é
                                                                reconhecido
                                                                como
                                                                um
                                                                dos
                                                                maiores
                                                                festivais
                                                                de
                                                                inovação
                                                                e
                                                                criatividade
                                                                do
                                                                país,
                                                                reunindo
                                                                uma
                                                                ampla
                                                                gama
                                                                de
                                                                atividades
                                                                que
                                                                incluem
                                                                palestras,
                                                                workshops,
                                                                shows
                                                                e
                                                                exposições.&nbsp;
                                                            </p>
                                                        </div>

                                                        <div class="mt-auto pt-space-6">
                                                            <span
                                                                class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                                aria-hidden="true">
                                                                <span
                                                                    class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                                    <span class="flex justify-center w-40 ">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>

                                                                    <span class="flex justify-center w-40">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>
                                                                </span>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </li>
                                        <li class="">


                                            <div
                                                class="relative flex flex-col h-full rounded-lg bg-layer text-primary transition p-16 md:px-24 lg:pb-24 lg:px-16 group/card ">
                                                <a href="https://www.futurecom.com.br/pt/home.html" target="_blank"
                                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                    aria-label="For Media"></a>

                                                <div
                                                    class="grid grid-cols-1 lg:flex lg:flex-col lg:h-full gap-x-gutter md:grid-cols-2">

                                                    <div class="relative mb-12 md:mb-0 lg:mb-16 [&amp;_>div]:h-auto">
                                                        <div
                                                            class="flex justify-center items-center h-full aspect-16/9">
                                                            <img src="{{URL ('assets/media/com.jpg')}}"
                                                                alt="foto da palestra da futurecom com o logo "
                                                                class="w-full h-full object-cover rounded-md">
                                                        </div>


                                                    </div>


                                                    <div class="flex flex-col flex-grow">


                                                        <h3 class="outline-none f-heading-4">
                                                            Futurecom
                                                        </h3>


                                                        <div class="mt-16 text-secondary f-body-2">
                                                            <p>O Futurecom
                                                                é
                                                                considerado
                                                                o
                                                                maior
                                                                e
                                                                mais
                                                                influente
                                                                encontro
                                                                de
                                                                tecnologia
                                                                e
                                                                inovação
                                                                da
                                                                América
                                                                Latina,
                                                                focando
                                                                na
                                                                transformação
                                                                digital
                                                                e
                                                                nas
                                                                tendências
                                                                emergentes
                                                                em
                                                                telecomunicações,
                                                                tecnologia
                                                                da
                                                                informação
                                                                e
                                                                conectividade.
                                                            </p>
                                                        </div>

                                                        <div class="mt-auto pt-space-6">
                                                            <span
                                                                class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                                aria-hidden="true">
                                                                <span
                                                                    class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                                    <span class="flex justify-center w-40 ">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>

                                                                    <span class="flex justify-center w-40">
                                                                        <svg width="24" height="24" aria-hidden="true">
                                                                            <use xlink:href="#arrow-right-24">
                                                                            </use>
                                                                        </svg>

                                                                    </span>
                                                                </span>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </li>
                                    </ul>
                                </div>

                            </section>

                        </div>
                    </div>




                    <div>


                        <div class="block-has-background">
                            <section class="">
                                <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                    <h2 class="outline-none text-secondary f-heading-5">
                                        Automação
                                    </h2>

                                </header>





                                <div class="container">
                                    <ul class=" grid grid-cols-1 md:grid-cols-2 gap-space-1">
                                        <li class="">


                                            <div
                                                class="relative flex flex-col h-full p-space-5 rounded-lg bg-layer text-primary transition ">

                                                <blockquote class="f-quote">
                                                    <div>
                                                        <p class="f-quote">

                                                            "
                                                            O
                                                            Metaverso
                                                            Industrial
                                                            será um
                                                            lugar
                                                            onde
                                                            inovaremos
                                                            na
                                                            velocidade
                                                            do
                                                            software.
                                                            Ele
                                                            oferecerá
                                                            enorme
                                                            potencial
                                                            para
                                                            transformar
                                                            nossas
                                                            economias
                                                            e
                                                            indústrias.
                                                            "
                                                            <br><br>
                                                            Roland
                                                            Busch

                                                        </p>
                                                    </div>


                                                </blockquote>

                                                <div class="flex items-end justify-between mt-auto pt-space-5">


                                                    <div
                                                        class="relative w-96 h-96 xl:w-180 xl:h-180 aspect-1/1 ml-auto">



                                                    </div>

                                                </div>
                                            </div>


                                        </li>
                                        <li class="">



                                            <div
                                                class="relative flex flex-col h-full group p-16 pb-24 lg:p-24 rounded-lg bg-layer text-primary transition group/card">
                                                <a href="topics/vehicle-tech-and-advanced-mobility/vehicle-tech-and-advanced-mobility.html"
                                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                    aria-label="Become a CTA Member"></a>


                                                <div class="relative mb-space-4">
                                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                                        <img src="{{URL ('assets/media/meta.webp')}}"
                                                            alt="simulação do metaverso industrial de Siemens e Nvidea"
                                                            class="w-full h-full object-cover rounded-md">
                                                    </div>


                                                </div>


                                                <span class="block mb-space-3 f-ui-1 text-tertiary"></span>


                                                <span class="f-quote">
                                                    Siemens e NVIDIA fazem
                                                    parceria para construir
                                                    o Metaverso Industrial

                                                </span>



                                                <div class="mt-auto pt-space-6">
                                                    <span
                                                        class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                        aria-hidden="true">
                                                        <span
                                                            class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard group-hover/card:-translate-y-full group-hover/card-feature:-translate-y-full">
                                                            <span class="flex justify-center w-40 translate-y-full">
                                                                <svg width="24" height="24" aria-hidden="true">
                                                                    <use xlink:href="#arrow-up-right-24">
                                                                    </use>
                                                                </svg>

                                                            </span>

                                                            <span class="flex justify-center w-40">
                                                                <svg width="24" height="24" aria-hidden="true">
                                                                    <use xlink:href="#arrow-up-right-24">
                                                                    </use>
                                                                </svg>

                                                            </span>
                                                        </span>
                                                    </span>

                                                </div>
                                            </div>


                                        </li>
                                    </ul>
                                </div>

                            </section>


                        </div>
                    </div>



                    <div class="block-container-full">
                        <section class="">
                            <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                <h2 class="outline-none text-secondary f-heading-5">
                                    Robótica
                                </h2>

                            </header>



                            <div class="container">
                                <ul class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-1">
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                            <a href="topics/Robotics/Robotics.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Retro Rides Meet Future Vibes: Vehicle Tech That Gets the Job Done"></a>


                                            <div class="relative mb-space-4">
                                                <div class="flex justify-center items-center h-full aspect-16/9">
                                                    <img src="{{URL ('assets/media/groot.webp')}}"
                                                        alt="Projeto Gr00t da nividea, robô humanoide"
                                                        class="w-full h-full object-cover rounded-md">
                                                </div>



                                            </div>


                                            <span class="block mb-space-3 f-ui-1 text-tertiary">robotica</span>


                                            <h3 class="outline-none f-heading-2">
                                                Projeto GR00T: NVIDIA aumentará
                                                a destreza e mobilidade do robô
                                                com nova IA e ferramentas de
                                                simulação
                                            </h3>


                                            <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                                <a href="topics/Robotics/Robotics.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">robotica</span>
                                                </a>

                                            </div>

                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                            <a href="topics/Robotics/Robotics.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Did You Know There are 3 Kinds of Quantum? &nbsp;"></a>


                                            <div class="relative mb-space-4">
                                                <div class="flex justify-center items-center h-full aspect-16/9">
                                                    <img src="{{URL ('assets/media/china.webp')}}"
                                                        alt="robô prata e preto estilo humanoide feito na China"
                                                        class="w-full h-full object-cover rounded-md">
                                                </div>


                                            </div>


                                            <span class="block mb-space-3 f-ui-1 text-tertiary">robotica</span>


                                            <h3 class="outline-none f-heading-2">
                                                Conheça o 'Iron': robô humanoide
                                                feito na China com 200 graus de
                                                liberdade
                                            </h3>


                                            <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                                <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">inteligencia
                                                        artificial</span>
                                                </a>

                                                <a href="topics/Robotics/Robotics.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">robotica</span>
                                                </a>

                                            </div>

                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                            <a href="topics/Robotics/Robotics.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Everybody Plays: How the Gaming Industry Is Leveling Up"></a>


                                            <div class="relative mb-space-4">
                                                <div class="flex justify-center items-center h-full aspect-16/9">
                                                    <img src="{{URL ('assets/media/optimus.jpg')}}"
                                                        alt="Robô optimus da tesla, estilo humanoide com cabeça preta e tronco branco"
                                                        class="w-full h-full object-cover rounded-md">
                                                </div>



                                            </div>


                                            <span class="block mb-space-3 f-ui-1 text-tertiary">robotica</span>


                                            <h3 class="outline-none f-heading-2">
                                                Elon Musk adia cronograma para
                                                robôs Optimus
                                            </h3>


                                            <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                                <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">inteligencia
                                                        artificial</span>
                                                </a>

                                                <a href="topics/Robotics/Robotics.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">robotica</span>
                                                </a>

                                            </div>

                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                            <a href="topics/Robotics/Robotics.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Connect. Solve. Discover. DIVE IN. "></a>


                                            <div class="relative mb-space-4">
                                                <div class="flex justify-center items-center h-full aspect-16/9">
                                                    <img src="{{URL ('assets/media/torso.jpg')}}"
                                                        alt="robô humanoide branco com musculos artificiais"
                                                        class="w-full h-full object-cover rounded-md">
                                                </div>



                                            </div>


                                            <span class="block mb-space-3 f-ui-1 text-tertiary">robotica</span>


                                            <h3 class="outline-none f-heading-2">
                                                A Clone Robotics revoluciona a tecnologia ao desenvolver um robô
                                                humanoide equipado com músculos artificiais, oferecendo movimentos mais
                                                naturais e ágeis.
                                            </h3>


                                            <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                                <a href="topics/Robotics/Robotics.html"
                                                    class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                                    <span
                                                        class="block whitespace-nowrap overflow-hidden text-ellipsis">robotica</span>

                                                </a>

                                            </div>

                                        </div>


                                    </li>
                                </ul>
                            </div>

                        </section>

                    </div>


                    <div class="block-container-full">
                        <section class="">
                            <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                                <h2 class="outline-none text-secondary f-heading-5">
                                    Inteligência Artificial
                                </h2>

                            </header>



                            <div class="container">
                                <ul class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-1">
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group rounded bg-layer text-primary transition p-16 md:pt-20 md:pb-24 group/card">
                                            <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="NVIDIA CEO Jensen Huang to Deliver JYNSGE 2025 Keynote"></a>


                                            <h3 class="outline-none f-heading-4">
                                                Google introduz "marca d'água"
                                                para sinalizar conteúdo gerado
                                                por IA.
                                            </h3>


                                            <span class="block mt-12 f-body-2 text-secondary">7
                                                de Novembro, 2024</span>

                                            <div class="mt-auto pt-space-6">
                                                <span
                                                    class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                    aria-hidden="true">
                                                    <span
                                                        class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                        <span class="flex justify-center w-40 ">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>

                                                        <span class="flex justify-center w-40">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>
                                                    </span>
                                                </span>

                                            </div>
                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group rounded bg-layer text-primary transition p-16 md:pt-20 md:pb-24 group/card">
                                            <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="JYNSGE 2025 Unveils the “JYNSGE Creator Space”"></a>


                                            <h3 class="outline-none f-heading-4">
                                                IA auxilia na detecção precoce
                                                de um tipo comum de arritmia
                                                cardíaca.
                                            </h3>


                                            <span class="block mt-12 f-body-2 text-secondary">7
                                                de Novembro, 2024</span>

                                            <div class="mt-auto pt-space-6">
                                                <span
                                                    class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                    aria-hidden="true">
                                                    <span
                                                        class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                        <span class="flex justify-center w-40 ">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>

                                                        <span class="flex justify-center w-40">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>
                                                    </span>
                                                </span>

                                            </div>
                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group rounded bg-layer text-primary transition p-16 md:pt-20 md:pb-24 group/card">
                                            <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="Panasonic Holdings to Keynote at JYNSGE 2025"></a>


                                            <h3 class="outline-none f-heading-4">
                                                Após 25 anos, a Intel será
                                                substituída pela Nvidia.
                                            </h3>

                                            <br>
                                            <span class="block mt-12 f-body-2 text-secondary">7
                                                de Novembro, 2024</span>

                                            <div class="mt-auto pt-space-6">
                                                <span
                                                    class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                    aria-hidden="true">
                                                    <span
                                                        class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                        <span class="flex justify-center w-40 ">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>

                                                        <span class="flex justify-center w-40">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>
                                                    </span>
                                                </span>

                                            </div>
                                        </div>


                                    </li>
                                    <li class="">



                                        <div
                                            class="relative flex flex-col h-full group rounded bg-layer text-primary transition p-16 md:pt-20 md:pb-24 group/card">
                                            <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                                class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                                aria-label="JYNSGE 2025 Registration is Now Open: The Moment to Dive In to Innovation is Here"></a>


                                            <h3 class="outline-none f-heading-4">
                                                Presidente do SoftBank afirma
                                                que a superinteligência
                                                artificial poderá existir até
                                                2035.
                                            </h3>


                                            <span class="block mt-12 f-body-2 text-secondary">7
                                                de Novembro, 2024</span>

                                            <div class="mt-auto pt-space-6">
                                                <span
                                                    class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                                    aria-hidden="true">
                                                    <span
                                                        class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                                        <span class="flex justify-center w-40 ">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>

                                                        <span class="flex justify-center w-40">
                                                            <svg width="24" height="24" aria-hidden="true">
                                                                <use xlink:href="#arrow-right-24">
                                                                </use>
                                                            </svg>

                                                        </span>
                                                    </span>
                                                </span>

                                            </div>
                                        </div>


                                    </li>
                                </ul>
                            </div>

                            <footer>
                                <div class="container mt-space-6 ">
                                    <div class="flex items-center">


                                        <a href="topics/artificial-intelligence/artificial-intelligence.html"
                                            class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 mr-space-1"
                                            data-behavior="Track" data-track-event="button_click"
                                            data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:&quot;View all Releases&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                            <span class="pt-1 text-inherit  mr-12">View
                                                all Releases</span>

                                            <svg class="icon-transition  shrink-0 pointer-events-none -mr-4" width="20"
                                                height="20" aria-hidden="true">
                                                <use xlink:href="#arrow-right-20">
                                                </use>
                                            </svg>

                                        </a>

                                    </div>
                                </div>

                            </footer>
                        </section>

                    </div>
                </div>

                <span data-content-bottom=""></span>
            </div>

        </main>


        @include('layouts.footer')


    </body>

    </html>

</x-app-layout>