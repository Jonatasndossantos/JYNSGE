<x-app-layout>
    @include('layouts.header')
    <body class="theme-blue-light bg text">


        <main id="pjax-wrapper" class="transition-fade">


            <header class="">
                <div class="container pt-16 pb-space-6">
                    <div class="cols-container">
                        <div class="lg:flex lg:flex-col lg:justify-between w-12-cols lg:pr-24 lg:w-7-cols">
                            <div>
                                <div class="inline-flex px-20 bg-interactive-on-background text-primary rounded">
                                    <nav aria-label="breadcrumb">

                                        <h2 id="BreadcrumbNavLabel" class="outline-none sr-only">
                                            {{ $noticia->titulo }}
                                        </h2>


                                        <ul class="flex justify-start gap-x-12 min-h-48 items-center"
                                            aria-labelledby="BreadcrumbNavLabel">
                                            <li class="flex items-center gap-x-12 f-body-1 after:content-['/']">
                                                <a href="{{route('topicos.show',$noticia->categorias)}}"
                                                    class="f-ui-1 underline-transparent hover:underline-inherit underline-offset-6 transition whitespace-nowrap">
                                                    @foreach($noticia->categorias as $categoria)
                                                        <span class="px-2 py-1 text-xs rounded-full" >
                                                            {{ $categoria->nome }}
                                                        </span>
                                                    @endforeach
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>

                            <div class="mt-40 md:mt-48 lg:mt-96">

                                <h1 class="outline-none f-display-4 text-secondary">
                                    {{ $noticia->titulo }}
                                </h1>


                                <p class="mt-16 text-secondary f-body-2">
                                    {{ \Carbon\Carbon::parse($noticia->updated_at)->format('F d, Y') }}
                                </p>
                            </div>
                        </div>
                        @if($noticia->linkImg)
                        <div class="w-12-cols lg:w-5-cols mt-space-6 lg:mt-0 lg:flex lg:flex-col lg:justify-end">

                            <div class="relative [&amp;_>div]:h-auto">
                                <div class="flex justify-center items-center h-full aspect-3/2">
                                    <img src="{{ asset('storage/' . $noticia->linkImg) }}"
                                        alt=""
                                        sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 96vw, (min-width: 1024px) and (max-width: 1279px) 96vw, (min-width: 1280px) and (max-width: 1679px) 40vw, (min-width: 1680px) and (max-width: 1919px) 40vw, (min-width: 1920px) 40vw"
                                        loading="lazy" class="w-full h-full object-cover rounded-md">
                                </div>


                            </div>

                        </div>
                        @endif

                    </div>
                </div>
            </header>



            <div class="last:-mb-space-10 pt-space-7 pb-space-9 bg-layer">
                <div class="relative container">
                    <div class="xl:absolute xl:top-0 xl:left-0 md:w-10-cols xl:w-3-cols mb-space-7 mx-auto">
                        <div class="mb-space-5">




                            <div class="relative " data-behavior="LinkDropdown">

                                <button type="button"
                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 active:bg-mix-interactive-on-layer-12 text-primary f-ui-1 w-full md:w-auto"
                                    data-linkdropdown-trigger="" aria-haspopup="true" aria-expanded="false"
                                    data-behavior="Track" data-track-event="button_click"
                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary-on-layer&quot;,&quot;call_to_action&quot;:&quot;Subscribe&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                    <span class="pt-1 text-inherit mr-auto mr-12">Subscribe</span>

                                    <svg class="icon-transition  shrink-0 pointer-events-none -mr-4" width="16" height="16"
                                        aria-hidden="true">
                                        <use xlink:href="#caret-down-16"></use>
                                    </svg>

                                </button>


                                <div class="absolute top-full left-0 z-10 min-w-224 max-h-252 mt-8 py-4 bg-layer rounded shadow-lg trans-show-hide overflow-auto"
                                    data-linkdropdown-list="">
                                    <ul>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://music.amazon.com/podcasts/2a032284-e042-4982-b043-b7d3b3fb88fe/ces-tech-talk?refMarker=null"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">Amazon Music</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://itunes.apple.com/us/podcast/ces-tech-talk/id1313539773?mt=2"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">Apple Podcasts</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://www.audacy.com/podcasts/ces-tech-talk-62602"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">Audacy</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://www.iheart.com/podcast/269-ces-tech-talk-109695463/"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">iHeart Radio</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://www.pandora.com/podcast/ces-tech-talk/PC:1390"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">Pandora</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://www.podbean.com/podcast-detail/b9fnh-5fd7a/CES-Tech-Talk-Podcast"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">PodBean</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://open.spotify.com/show/6sIKoUOesQdimyq7mO188i"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">Spotify</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://tunein.com/radio/CES-Tech-Talk-p1065284/"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                target="_blank" data-no-swup="">

                                                <span class="text-inherit f-body-1">TuneIn</span>

                                            </a>

                                        </li>
                                        <li class="border-b border-subtle last:border-0">

                                            <a href="https://www.youtube.com/@CES/featured"
                                                class="inline-flex justify-between items-center transition-colors duration-100 underline-transparent hover:underline-default underline-offset-4 decoration-1 f-body-2 w-full py-12 px-16 text-secondary hover:bg-interactive-on-layer !no-underline"
                                                data-no-swup="">

                                                <span class="text-inherit f-body-1">YouTube</span>

                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="text-secondary">


                            <ul class="relative flex xl:flex-col flex-wrap items-start justify-start gap-y-8 gap-x-4 mt-24 first:mt-0">
                                
                            @foreach($noticia->categorias as $categoria)
                                <li class="max-w-full">
                                    <a href="{{route('topicos.show',$noticia->categorias)}}"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">
                                        {{ $categoria->nome }}
                                        </span>
                                    </a>

                                </li>
                            @endforeach
                            </ul>
                    
                        </div>

                    </div>

                    <div class="relative w-12-cols md:w-10-cols xl:w-9-cols mb-space-7 mx-auto xl:ml-auto xl:mr-0">

                        <div class="w-12-cols md:w-10-cols xl:w-6-cols mb-space-7">
                            <div class="podcast-embed">
                                <iframe height="60px" width="100%" frameborder="no" scrolling="no" seamless=""
                                    src="https://player.cohostpodcasting.com/eac45c2f-e0af-4970-8f47-653d2c2856ab/f994acbe-8dd7-4773-951f-3361df738b1a"></iframe>
                            </div>
                            <div class="mt-space-7 first:mt-0">
                                <div class="p-space-5 border border-subtle rounded">

                                    <span
                                        class="outline-none pb-space-4 border-b border-subtle text-secondary f-heading-2 block">
                                        Article Summary
                                    </span>


                                    <div class="rich-text mt-space-4">
                                        <p>{{ $noticia->resumo }}</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div>




                    <div class="block-container">
                        <div class="block-layout">

                            <h2 class="outline-none text-secondary f-heading-5">
                                Guests
                            </h2>


                            <div class="mt-24">


                                <div class="container">
                                    <ul class=" grid grid-cols-1 gap-space-1" role="presentation">
                                        <li class="" role="presentation">


                                            <div
                                                class="relative h-full py-12 px-12 md:px-16 xl:p-16 rounded-lg text-primary transition  bg">

                                                <div
                                                    class="flex flex-row-reverse justify-between gap-16 md:justify-normal md:flex-row xl:gap-24">
                                                    <div class="flex-shrink-0 w-64 xl:w-96">

                                                        <div class="relative ">
                                                            <div class="flex justify-center items-center h-full aspect-1/1">
                                                                <img src="/media/gkhjxrtr/eric-weisberg_havas.jpg?width=1000&amp;height=1000&amp;format=webp&amp;quality=80"
                                                                    alt=""
                                                                    srcset="/media/gkhjxrtr/eric-weisberg_havas.jpg?width=250&amp;height=250&amp;format=webp&amp;quality=80 250w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=500&amp;height=500&amp;format=webp&amp;quality=80 500w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=750&amp;height=750&amp;format=webp&amp;quality=80 750w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=1000&amp;height=1000&amp;format=webp&amp;quality=80 1000w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=1250&amp;height=1250&amp;format=webp&amp;quality=80 1250w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=1500&amp;height=1500&amp;format=webp&amp;quality=80 1500w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=2000&amp;height=2000&amp;format=webp&amp;quality=80 2000w, /media/gkhjxrtr/eric-weisberg_havas.jpg?width=2500&amp;height=2500&amp;format=webp&amp;quality=80 2500w"
                                                                    sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 96vw, (min-width: 1024px) and (max-width: 1279px) 96vw, (min-width: 1280px) and (max-width: 1679px) 96vw, (min-width: 1680px) and (max-width: 1919px) 96vw, (min-width: 1920px) 96vw"
                                                                    loading="lazy"
                                                                    class="w-full h-full object-cover rounded-full">
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="flex flex-col mr-auto">

                                                        <h3 class="outline-none f-heading-4">
                                                            Eric Weisberg
                                                        </h3>


                                                        <p class="mt-4 text-secondary f-caption-2">Global Chief Creative
                                                            Officer, Havas Health Network&nbsp;</p>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="block-container">
                        <div class="block-layout">

                            <div>

                                <h3 id="Accordion28785557-31d8-4013-bcbb-aa3ac960a097" class="outline-none sr-only">
                                    Accordion
                                </h3>


                                <ul data-behavior="Accordion"
                                    aria-labelledby="Accordion28785557-31d8-4013-bcbb-aa3ac960a097">
                                    <li data-accordion-item="">

                                        <h4 class="outline-none  block">

                                            <button id="AccordionItem062f5d31-955c-4d4d-9c3a-39959395c4e7"
                                                aria-expanded="false"
                                                aria-controls="AccordionItemLabele20b1c94-5da3-4d8a-9751-bfbb07f0edc2"
                                                data-accordion-trigger=""
                                                class="flex items-center justify-between w-full py-12 group xl:py-16 text-left text-secondary f-heading-3 border-t border-subtle aria-expanded:text-primary aria-expanded:border-strong">
                                                Transcript


                                                <span
                                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 ml-20 bg-interactive-on-layer group-hover:bg-mix-interactive-on-layer-8   "
                                                    data-accordion-trigger-icon="" data-behavior="Track"
                                                    data-track-event="button_click"
                                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                                    <svg class="icon-transition " width="24" height="24" aria-hidden="true">
                                                        <use xlink:href="#chevron-down-24"></use>
                                                    </svg>

                                                </span>

                                            </button>
                                        </h4>


                                        <div id="AccordionItemLabele20b1c94-5da3-4d8a-9751-bfbb07f0edc2"
                                            class="hidden h-0 overflow-hidden transition-all duration-250 ease-expressive-standard"
                                            role="region"
                                            aria-labelledby="AccordionItem062f5d31-955c-4d4d-9c3a-39959395c4e7"
                                            aria-hidden="true" data-accordion-content="">
                                            <div class="pt-space-2 pb-space-6" data-accordion-content-inner="">
                                                <div class="rich-text ">
                                                    {{$noticia->conteudo}}
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <span data-content-bottom=""></span>
                </div>
            </div>








            <div class="block-container-full">
                <div class="relative p-space-5 rounded-lg bg-layer text-primary transition group/card">
                    <a href="/topics/digital-health/"
                        class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                        aria-label="Digital Health"></a>

                    <div class="cols-container flex-col-reverse md:flex-row justify-between">
                        <div class="w-12-cols md:w-9-cols lg:w-8-cols flex flex-col">


                            <span class="outline-none f-heading-5 block">
                                Digital Health
                            </span>


                            <div class="mt-16 f-body-2 text-secondary">
                                <p>Explore the latest advancements in AI, IoT, telehealth, and digital health solutions.
                                    These groundbreaking technologies are reshaping healthcare delivery, improving patient
                                    outcomes, and enhancing operational efficiency.</p>
                            </div>

                            <div class="mt-auto pt-24">
                                <span
                                    class="inline-flex justify-end items-center transition-all duration-100 data-[focus-method=key]:focus:outline data-[focus-method=key]:focus:outline-2 data-[focus-method=key]:focus:outline-offset-2 data-[focus-method=key]:focus:outline-interactive-accent whitespace-nowrap disabled:opacity-30 disabled:pointer-events-none rounded-full w-40 h-40 text-primary hover:bg-mix-layer-8 active:bg-mix-layer-12 border-1.5 border-strong f-ui-1 overflow-hidden"
                                    aria-hidden="true">
                                    <span
                                        class="flex -mr-1 group-hover/card:translate-x-1/2 group-hover/card-feature:translate-x-1/2 transition-all duration-300 ease-expressive-standard ">
                                        <span class="flex justify-center w-40 ">
                                            <svg width="24" height="24" aria-hidden="true">
                                                <use xlink:href="#arrow-right-24"></use>
                                            </svg>

                                        </span>

                                        <span class="flex justify-center w-40">
                                            <svg width="24" height="24" aria-hidden="true">
                                                <use xlink:href="#arrow-right-24"></use>
                                            </svg>

                                        </span>
                                    </span>
                                </span>

                            </div>
                        </div>

                        <div class="w-12-cols md:w-3-cols">

                            <div class="relative mb-space-4 md:mb-0">
                                <div class="flex justify-center items-center h-full aspect-3/2">
                                    <img src="/media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=1000&amp;height=666&amp;format=webp&amp;quality=80"
                                        alt="Alt text: A Man with short dark hair in a white lab coat stands confidently against a vibrant, abstract background with flowing shapes in blue, purple, green and white."
                                        srcset="/media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=250&amp;height=166&amp;format=webp&amp;quality=80 250w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=500&amp;height=333&amp;format=webp&amp;quality=80 500w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=750&amp;height=500&amp;format=webp&amp;quality=80 750w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=1000&amp;height=666&amp;format=webp&amp;quality=80 1000w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=1250&amp;height=833&amp;format=webp&amp;quality=80 1250w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=1500&amp;height=1000&amp;format=webp&amp;quality=80 1500w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=2000&amp;height=1333&amp;format=webp&amp;quality=80 2000w, /media/mtflvyid/24-cta-2523_ces25-topicpage-ai-medicaltech_3200x1600.jpg?width=2500&amp;height=1666&amp;format=webp&amp;quality=80 2500w"
                                        sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 24vw, (min-width: 1024px) and (max-width: 1279px) 24vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                        loading="lazy" class="w-full h-full object-cover rounded">
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>



            <div class="block-container-full">
                <section class="">
                    <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                        <h2 id="LatestDigitalHealthContent" class="outline-none text-secondary f-heading-5">
                            Latest Digital Health Content
                        </h2>

                    </header>



                    <div class="container">
                        <ul class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-1">
                            <li class="">



                                <div
                                    class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                    <a href="/videos/2025/february/don-abbey-on-digital-health-innovation-at-ces-2025/"
                                        class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                        aria-label="Don Abbey on Digital Health Innovation at CES 2025"></a>


                                    <div class="relative mb-space-4">
                                        <div class="flex justify-center items-center h-full aspect-16/9">
                                            <img src="/media/ojvjzvux/6369344305112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                                alt=""
                                                srcset="/media/ojvjzvux/6369344305112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/ojvjzvux/6369344305112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/ojvjzvux/6369344305112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/ojvjzvux/6369344305112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/ojvjzvux/6369344305112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/ojvjzvux/6369344305112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/ojvjzvux/6369344305112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/ojvjzvux/6369344305112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                                sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                                loading="lazy" class="w-full h-full object-cover rounded-md">
                                        </div>
                                        <span
                                            class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                            <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                                <use xlink:href="#play-filled-12"></use>
                                            </svg>


                                            <span>08:27</span>
                                        </span>


                                    </div>


                                    <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                    <h3 class="outline-none f-heading-4">
                                        Don Abbey on Digital Health Innovation at CES 2025
                                    </h3>


                                    <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                        <a href="/discover/?topics=Digital+Health"
                                            class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                            <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Digital
                                                Health</span>
                                        </a>

                                    </div>

                                </div>


                            </li>
                            <li class="">



                                <div
                                    class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                    <a href="/videos/2025/february/ricky-choi-on-digital-health-innovation-at-ces-2025/"
                                        class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                        aria-label="Ricky Choi on Digital Health Innovation at CES 2025"></a>


                                    <div class="relative mb-space-4">
                                        <div class="flex justify-center items-center h-full aspect-16/9">
                                            <img src="/media/g3dk5iq3/6369062941112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                                alt=""
                                                srcset="/media/g3dk5iq3/6369062941112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/g3dk5iq3/6369062941112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/g3dk5iq3/6369062941112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/g3dk5iq3/6369062941112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/g3dk5iq3/6369062941112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/g3dk5iq3/6369062941112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/g3dk5iq3/6369062941112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/g3dk5iq3/6369062941112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                                sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                                loading="lazy" class="w-full h-full object-cover rounded-md">
                                        </div>
                                        <span
                                            class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                            <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                                <use xlink:href="#play-filled-12"></use>
                                            </svg>


                                            <span>10:13</span>
                                        </span>


                                    </div>


                                    <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                    <h3 class="outline-none f-heading-4">
                                        Ricky Choi on Digital Health Innovation at CES 2025
                                    </h3>


                                    <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                        <a href="/discover/?topics=Digital+Health"
                                            class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                            <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Digital
                                                Health</span>
                                        </a>

                                    </div>

                                </div>


                            </li>
                            <li class="">



                                <div
                                    class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                    <a href="/videos/2025/february/moving-the-needle-with-the-cta-health-board/"
                                        class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                        aria-label="Moving the Needle with the CTA Health Board"></a>


                                    <div class="relative mb-space-4">
                                        <div class="flex justify-center items-center h-full aspect-16/9">
                                            <img src="/media/wtnnyx2g/6368655959112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                                alt=""
                                                srcset="/media/wtnnyx2g/6368655959112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/wtnnyx2g/6368655959112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/wtnnyx2g/6368655959112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/wtnnyx2g/6368655959112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/wtnnyx2g/6368655959112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/wtnnyx2g/6368655959112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/wtnnyx2g/6368655959112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/wtnnyx2g/6368655959112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                                sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                                loading="lazy" class="w-full h-full object-cover rounded-md">
                                        </div>
                                        <span
                                            class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                            <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                                <use xlink:href="#play-filled-12"></use>
                                            </svg>


                                            <span>02:29</span>
                                        </span>


                                    </div>


                                    <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                    <h3 class="outline-none f-heading-4">
                                        Moving the Needle with the CTA Health Board
                                    </h3>


                                    <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                        <a href="/discover/?topics=Digital+Health"
                                            class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                            <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Digital
                                                Health</span>
                                        </a>

                                    </div>

                                </div>


                            </li>
                        </ul>
                    </div>

                    <footer>
                        <div class="container mt-space-6 ">
                            <div class="flex items-center">


                                <a href=""
                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 mr-space-1"
                                    data-behavior="Track" data-track-event="button_click"
                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:&quot;See all content&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                    <span class="pt-1 text-inherit  mr-12">See all content</span>

                                    <svg class="icon-transition  shrink-0 pointer-events-none -mr-4" width="20" height="20"
                                        aria-hidden="true">
                                        <use xlink:href="#arrow-right-20"></use>
                                    </svg>

                                </a>

                            </div>
                        </div>

                    </footer>
                </section>
            </div>
        </main>
    </body>
    @include('layouts.footer')
</x-app-layout>