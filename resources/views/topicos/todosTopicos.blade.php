<x-app-layout>

<body class="theme-blue-light bg text">
    
    @include('layouts.header')


    <main id="pjax-wrapper" class="transition-fade">


        <header class="overflow-hidden">
            <div class="">
                <div class="container pt-8 md:pt-16 pb-space-6">



                    <h1 class="outline-none mt-space-8 f-display-1 lg:w-10-cols text-secondary">
                        Topicos
                    </h1>


                    <div class="md:w-10-cols xl:w-7-cols mt-space-5 text-secondary f-body-2 empty:m-0"></div>


                </div>
            </div>

        </header>


        <div class="block-container-full">
            <section class="">
                <header class="container pb-space-4 border-b border-subtle mb-space-5 ">

                    <h2 id="FeaturedTopics" class="outline-none text-secondary f-heading-5">
                        Principais Tópicos
                    </h2>

                </header>



                <div class="container">
                    <ul class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-1">
                        <li class="">


                            <div
                                class="relative flex flex-col h-full p-16 md:pb-24 rounded-lg bg-layer text-primary transition group/card theme-dark">
                                <a href="../topics/artificial-intelligence/artificial-intelligence.html"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Artificial Intelligence"></a>


                                <div class="relative mb-16">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="{{ url('/assets/media/24-cta-2523_ces25-topicpage-ai-enterprise_3200x1600.jpg') }} "
                                            alt="Alt text: A Man with short dark hair in a suit stands confidently against a vibrant, abstract background with flowing shapes in blue, yellow, and white."
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md" />
                                    </div>


                                </div>



                                <h3 class="outline-none f-heading-4">
                                    Inteligência Artificial
                                </h3>


                                <div class="mt-16 text-secondary f-body-2">
                                    <p>Indústrias em transformação, abrindo novos recursos e melhorando a eficiência. <br>
                                        A inteligência artificial já está melhorando nossas vidas de maneiras profundas e
                                        as possibilidades para o futuro são aparentemente ilimitadas.</p>
                                </div>

                            </div>


                        </li>
                        <li class="">


                            <div
                                class="relative flex flex-col h-full p-16 md:pb-24 rounded-lg bg-layer text-primary transition group/card theme-dark">
                                <a href="../topics/vehicle-tech-and-advanced-mobility/vehicle-tech-and-advanced-mobility.html"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Digital Health"></a>


                                <div class="relative mb-16">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="{{ url('/assets/media/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg') }}"
                                            alt="Alt text: A Man with short dark hair in a white lab coat stands confidently against a vibrant, abstract background with flowing shapes in blue, purple, green and white."
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md" />
                                    </div>


                                </div>



                                <h3 class="outline-none f-heading-4">
                                    Automação
                                </h3>


                                <div class="mt-16 text-secondary f-body-2">
                                    <p>Desde veículos autônomos e conectados até avanços no transporte aéreo,
                                        a tecnologia transformou a maneira como vivenciamos a mobilidade. Revolucionando a maneira como empresas e indústrias operam.</p>
                                </div>

                            </div>


                        </li>
                        <li class="">


                            <div
                                class="relative flex flex-col h-full p-16 md:pb-24 rounded-lg bg-layer text-primary transition group/card theme-dark">
                                <a href="../topics/Robotics/Robotics.html"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Robótica"></a>


                                <div class="relative mb-16">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="{{ url('/assets/media/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg') }}  "
                                            alt="Alt text: Um robo "
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 32vw, (min-width: 1680px) and (max-width: 1919px) 32vw, (min-width: 1920px) 32vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md" />
                                    </div>


                                </div>



                                <h3 class="outline-none f-heading-4">
                                    Robótica
                                </h3>


                                <div class="mt-16 text-secondary f-body-2">
                                    <p>Desde robôs industriais e assistentes pessoais até sistemas autônomos e inteligência artificial, a robótica está transformando diversos setores e moldando o futuro do trabalho. </p>
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

                    <h2 id="AllTopics" class="outline-none text-secondary f-heading-5">
                        Todos os Tópicos
                    </h2>

                </header>



                <div class="container">
                    <ul class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-1">
                    @forelse($topicos as $topico)
                        <li class="">
                            <div class="relative flex flex-col h-full p-16 md:pb-24 rounded-lg bg-layer text-primary transition group/card ">
                                <a href="{{route('topicos.show', ['topico' => $topico]) }}"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="5G">
                                </a>

                                <h3 class="outline-none f-heading-4">
                                    {{ $topico->nome }}
                                </h3>

                                <div class="mt-16 text-secondary f-body-2">
                                    <p>{{($topico->descricao)}}</p>
                                </div>
                            </div>
                        </li>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                Nenhuma topico encontrado
                            </td>
                        </tr>
                    @endforelse
                    </ul>
                </div>
            </section>
        </div>
    </main>
    @include('layouts.footer')


</body>
</x-app-layout>