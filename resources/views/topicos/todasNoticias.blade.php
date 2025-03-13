<x-app-layouts>
@include('layouts.header')
<main id="pjax-wrapper" class="transition-fade">


    <header class="overflow-hidden">
        <div class="">
            <div class="container pt-8 md:pt-16 pb-space-6">



                <h1 class="outline-none mt-space-8 f-display-1 lg:w-10-cols text-secondary">
                    Discover
                </h1>




            </div>
        </div>

    </header>


    <div class="pb-space-8">

    </div>

    <div id="filter-wrapper" class="theme-blue-light -mb-space-10 pb-space-10 bg text before:clear-margin">
        <header class="container pb-space-4 border-b border-subtle mb-space-5 mt-space-9">

            <h2 id="ContentLibrary" class="outline-none text-secondary f-heading-5">
                Content Library
            </h2>

        </header>



        <div id="filter-bar" class="mt-space-6" data-swup-fragment="">
            <div class="container">
                <div class="cols-container gap-y-12">
                    <div class="w-12-cols md:w-7-cols">
                        <div
                            class="flex items-center md:w-6-cols lg:w-3-cols h-48 pl-16 pr-12 border rounded bg-layer focus-within:outline outline-offset-4">
                            <svg width="20" height="20" aria-hidden="true">
                                <use xlink:href="#search-20"></use>
                            </svg>


                            <form class="block w-full" action="/discover/" method="GET" data-pjax-form="">

                                <input type="search" value="" id="FilterSearchInput" name="q"
                                    class="w-full pl-12 f-ui-2 outline-none" placeholder="Search">
                            </form>
                        </div>
                    </div>

                    <div class="w-12-cols md:flex md:w-5-cols md:justify-end">

                        <div>
                        </div>

                        <div
                            class="fixed shrink-0 lg:static bottom-16 md:bottom-24 left-outer-gutter right-outer-gutter z-50 text-right">


                            <button type="button"
                                class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 w-full lg:w-auto sm:max-lg:bg-interactive-primary sm:max-lg:text-inverse sm:max-lg:hover:text-inverse sm:max-lg:hover:bg-mix-interactive-primary-8 sm:max-lg:active:bg-mix-interactive-primary-12"
                                data-modal-target="#FilterOverlayModal" data-behavior="Track"
                                data-track-event="button_click"
                                data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:&quot;Filter \u0026 Sort&quot;,&quot;action&quot;:&quot;new_page&quot;}">
                                <svg class="icon-transition  shrink-0 pointer-events-none -ml-4" width="20" height="20"
                                    aria-hidden="true">
                                    <use xlink:href="#filter-20"></use>
                                </svg>


                                <span class="pt-1 text-inherit  ml-12">Filter &amp; Sort</span>

                            </button>

                        </div>
                    </div>
                </div>


            </div>

            <div id="FilterOverlayModal"
                class="fixed inset-0 z-999 trans-show-hide flex justify-end bg-overlay md:p-12 " role="dialog"
                aria-labelledby="FilterOverlayModalTitle" aria-modal="true" data-behavior="Modal"
                data-modal-panel="true">
                <div class="relative overflow-hidden overflow-y-auto bg-layer text-primary transition duration-250 w-full md:rounded md:shadow-lg translate-x-40  md:w-6-cols xl:w-4-cols flex flex-col"
                    data-modal-wrapper="" data-modal-focus-trap="" tabindex="-1">



                    <div class="relative flex flex-col px-space-5 " data-behavior="FilterOverlay">
                        <div class="sticky top-0 py-space-5 bg-layer">

                            <h1 id="FilterOverlayTitle" class="outline-none my-8 f-heading-2" tabindex="-1"
                                data-modal-initial-focus="">
                                Filter &amp; Sort
                            </h1>



                            <button type="button"
                                class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 text-primary hover:bg-mix-interactive-on-layer-8 active:bg-mix-layer-12 f-ui-1 absolute top-space-5 right-0 z-50"
                                aria-label="Close modal" data-modal-close-trigger="" data-behavior="Track"
                                data-track-event="button_click"
                                data-track-data="{&quot;button_hierarchy&quot;:&quot;ghost&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                <svg class="icon-transition " width="24" height="24" aria-hidden="true">
                                    <use xlink:href="#close-24"></use>
                                </svg>

                            </button>

                        </div>

                        <div class="flex-1">



                            <div>

                                <h3 id="Accordionba51df41-4144-4dd4-aee1-10df2a085a2d" class="outline-none sr-only">
                                    Accordion
                                </h3>


                                <ul data-behavior="Accordion"
                                    aria-labelledby="Accordionba51df41-4144-4dd4-aee1-10df2a085a2d">
                                    <li data-accordion-item="">

                                        <h4 class="outline-none  block">

                                            <button id="AccordionItem7b6eeb46-8354-4134-8fc2-256fb1b46e51"
                                                aria-expanded="false"
                                                aria-controls="AccordionItemLabel00f206de-5489-46d6-b060-44c8e022c4d5"
                                                data-accordion-trigger=""
                                                class="flex items-center justify-between w-full py-12 group xl:py-16 text-left text-secondary f-heading-3 border-t border-subtle aria-expanded:text-primary aria-expanded:border-strong">
                                                Topic


                                                <span
                                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 ml-20 bg-interactive-on-layer group-hover:bg-mix-interactive-on-layer-8   "
                                                    data-accordion-trigger-icon="" data-behavior="Track"
                                                    data-track-event="button_click"
                                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                                    <svg class="icon-transition " width="24" height="24"
                                                        aria-hidden="true">
                                                        <use xlink:href="#chevron-down-24"></use>
                                                    </svg>

                                                </span>

                                            </button>
                                        </h4>


                                        <div id="AccordionItemLabel00f206de-5489-46d6-b060-44c8e022c4d5"
                                            class="hidden h-0 overflow-hidden transition-all duration-250 ease-expressive-standard"
                                            role="region"
                                            aria-labelledby="AccordionItem7b6eeb46-8354-4134-8fc2-256fb1b46e51"
                                            aria-hidden="true" data-accordion-content="">
                                            <div class="pt-space-2 pb-space-6" data-accordion-content-inner="">
                                                <div class="">
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-5G"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-5G" name="topics"
                                                                value="5G" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">5G</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Accessibility"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Accessibility"
                                                                name="topics" value="Accessibility"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span
                                                                class="ml-12 text-secondary f-body-1">Accessibility</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-AR/VR/XR"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-AR/VR/XR" name="topics"
                                                                value="AR/VR/XR" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">AR/VR/XR</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Artificial Intelligence"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Artificial Intelligence"
                                                                name="topics" value="Artificial Intelligence"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Artificial
                                                                Intelligence</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Audio/Video"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Audio/Video" name="topics"
                                                                value="Audio/Video"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span
                                                                class="ml-12 text-secondary f-body-1">Audio/Video</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Content and Entertainment"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Content and Entertainment"
                                                                name="topics" value="Content and Entertainment"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Content and
                                                                Entertainment</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Digital Health"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Digital Health"
                                                                name="topics" value="Digital Health"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Digital
                                                                Health</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Diversity and Inclusion"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Diversity and Inclusion"
                                                                name="topics" value="Diversity and Inclusion"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Diversity and
                                                                Inclusion</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Enterprise"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Enterprise" name="topics"
                                                                value="Enterprise" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span
                                                                class="ml-12 text-secondary f-body-1">Enterprise</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Fintech"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Fintech" name="topics"
                                                                value="Fintech" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Fintech</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Fitness"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Fitness" name="topics"
                                                                value="Fitness" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Fitness</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Food Tech"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Food Tech" name="topics"
                                                                value="Food Tech" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Food Tech</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Gaming and Esports"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Gaming and Esports"
                                                                name="topics" value="Gaming and Esports"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Gaming and
                                                                Esports</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Home Entertainment"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Home Entertainment"
                                                                name="topics" value="Home Entertainment"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Home
                                                                Entertainment</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Lifestyle"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Lifestyle" name="topics"
                                                                value="Lifestyle" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Lifestyle</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Marketing and Advertising"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Marketing and Advertising"
                                                                name="topics" value="Marketing and Advertising"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Marketing and
                                                                Advertising</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Robotics"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Robotics" name="topics"
                                                                value="Robotics" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Robotics</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Smart Cities"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Smart Cities"
                                                                name="topics" value="Smart Cities"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Smart
                                                                Cities</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Smart Home"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Smart Home" name="topics"
                                                                value="Smart Home" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Smart
                                                                Home</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Space Tech"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Space Tech" name="topics"
                                                                value="Space Tech" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Space
                                                                Tech</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Sports"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Sports" name="topics"
                                                                value="Sports" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Sports</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Startups"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Startups" name="topics"
                                                                value="Startups" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Startups</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Sustainability"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Sustainability"
                                                                name="topics" value="Sustainability"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span
                                                                class="ml-12 text-secondary f-body-1">Sustainability</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Travel and Tourism"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="topics-Travel and Tourism"
                                                                name="topics" value="Travel and Tourism"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Travel and
                                                                Tourism</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="topics-Vehicle Tech and Advanced Mobility"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox"
                                                                id="topics-Vehicle Tech and Advanced Mobility"
                                                                name="topics" value="Vehicle Tech and Advanced Mobility"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Vehicle Tech and
                                                                Advanced Mobility</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li data-accordion-item="">

                                        <h4 class="outline-none  block">

                                            <button id="AccordionItem54c180dd-1283-4af3-bbe1-016ee5991e60"
                                                aria-expanded="false"
                                                aria-controls="AccordionItemLabel168e0fcc-6c96-4ccb-9063-75f2ab7410e5"
                                                data-accordion-trigger=""
                                                class="flex items-center justify-between w-full py-12 group xl:py-16 text-left text-secondary f-heading-3 border-t border-subtle aria-expanded:text-primary aria-expanded:border-strong">
                                                Type


                                                <span
                                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 ml-20 bg-interactive-on-layer group-hover:bg-mix-interactive-on-layer-8   "
                                                    data-accordion-trigger-icon="" data-behavior="Track"
                                                    data-track-event="button_click"
                                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                                    <svg class="icon-transition " width="24" height="24"
                                                        aria-hidden="true">
                                                        <use xlink:href="#chevron-down-24"></use>
                                                    </svg>

                                                </span>

                                            </button>
                                        </h4>


                                        <div id="AccordionItemLabel168e0fcc-6c96-4ccb-9063-75f2ab7410e5"
                                            class="hidden h-0 overflow-hidden transition-all duration-250 ease-expressive-standard"
                                            role="region"
                                            aria-labelledby="AccordionItem54c180dd-1283-4af3-bbe1-016ee5991e60"
                                            aria-hidden="true" data-accordion-content="">
                                            <div class="pt-space-2 pb-space-6" data-accordion-content-inner="">
                                                <div class="">
                                                    <div class="border-t border-subtle">
                                                        <label for="type-Article"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="type-Article" name="type"
                                                                value="Article" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Article</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="type-Video"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="type-Video" name="type"
                                                                value="Video" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Video</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="type-Podcast"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="type-Podcast" name="type"
                                                                value="Podcast" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Podcast</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="type-Success Story"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="type-Success Story" name="type"
                                                                value="Success Story"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Success
                                                                Story</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li data-accordion-item="">

                                        <h4 class="outline-none  block">

                                            <button id="AccordionItem41bd0bb6-479f-4af8-81cb-297ad4b41159"
                                                aria-expanded="false"
                                                aria-controls="AccordionItemLabel7879db66-2f12-4fea-b503-8a607ae6acc7"
                                                data-accordion-trigger=""
                                                class="flex items-center justify-between w-full py-12 group xl:py-16 text-left text-secondary f-heading-3 border-t border-subtle aria-expanded:text-primary aria-expanded:border-strong">
                                                Year


                                                <span
                                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 ml-20 bg-interactive-on-layer group-hover:bg-mix-interactive-on-layer-8   "
                                                    data-accordion-trigger-icon="" data-behavior="Track"
                                                    data-track-event="button_click"
                                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                                    <svg class="icon-transition " width="24" height="24"
                                                        aria-hidden="true">
                                                        <use xlink:href="#chevron-down-24"></use>
                                                    </svg>

                                                </span>

                                            </button>
                                        </h4>


                                        <div id="AccordionItemLabel7879db66-2f12-4fea-b503-8a607ae6acc7"
                                            class="hidden h-0 overflow-hidden transition-all duration-250 ease-expressive-standard"
                                            role="region"
                                            aria-labelledby="AccordionItem41bd0bb6-479f-4af8-81cb-297ad4b41159"
                                            aria-hidden="true" data-accordion-content="">
                                            <div class="pt-space-2 pb-space-6" data-accordion-content-inner="">
                                                <div class="">
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2025"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2025" name="year"
                                                                value="2025" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2025</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2024"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2024" name="year"
                                                                value="2024" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2024</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2023"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2023" name="year"
                                                                value="2023" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2023</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2022"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2022" name="year"
                                                                value="2022" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2022</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2021"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2021" name="year"
                                                                value="2021" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2021</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2020"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2020" name="year"
                                                                value="2020" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2020</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2019"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2019" name="year"
                                                                value="2019" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2019</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="year-2018"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="checkbox" id="year-2018" name="year"
                                                                value="2018" class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-xs peer-checked/filter-checkbox:bg-interactive-primary peer-checked/filter-checkbox:text-light">
                                                                <svg class="-mt-1 -ml-1" width="20" height="20"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#check-20"></use>
                                                                </svg>

                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">2018</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li data-accordion-item="">

                                        <h4 class="outline-none  block">

                                            <button id="AccordionItem84a79642-d860-427d-9be1-dfa76183bbfb"
                                                aria-expanded="false"
                                                aria-controls="AccordionItemLabel307eac50-eb01-4b41-9927-224fc82b4f10"
                                                data-accordion-trigger=""
                                                class="flex items-center justify-between w-full py-12 group xl:py-16 text-left text-secondary f-heading-3 border-t border-subtle aria-expanded:text-primary aria-expanded:border-strong">
                                                Sort by


                                                <span
                                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-40 min-h-40 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 ml-20 bg-interactive-on-layer group-hover:bg-mix-interactive-on-layer-8   "
                                                    data-accordion-trigger-icon="" data-behavior="Track"
                                                    data-track-event="button_click"
                                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                                                    <svg class="icon-transition " width="24" height="24"
                                                        aria-hidden="true">
                                                        <use xlink:href="#chevron-down-24"></use>
                                                    </svg>

                                                </span>

                                            </button>
                                        </h4>


                                        <div id="AccordionItemLabel307eac50-eb01-4b41-9927-224fc82b4f10"
                                            class="hidden h-0 overflow-hidden transition-all duration-250 ease-expressive-standard"
                                            role="region"
                                            aria-labelledby="AccordionItem84a79642-d860-427d-9be1-dfa76183bbfb"
                                            aria-hidden="true" data-accordion-content="">
                                            <div class="pt-space-2 pb-space-6" data-accordion-content-inner="">
                                                <div class="">
                                                    <div class="border-t border-subtle">
                                                        <label for="sort-asc"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox=""
                                                            data-filteroverlay-is-default="1">
                                                            <input type="radio" id="sort-asc" name="sort" value="asc"
                                                                class="sr-only peer/filter-checkbox" checked="">

                                                            <span
                                                                class="block w-20 h-20 border rounded-full group-hover/filter-item:border-strong peer-checked/filter-checkbox:border-6 peer-checked/filter-checkbox:border-interactive-primary">
                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Oldest to
                                                                Newest</span>
                                                        </label>
                                                    </div>
                                                    <div class="border-t border-subtle">
                                                        <label for="sort-desc"
                                                            class="flex items-center py-12 hover:bg cursor-pointer group/filter-item text-light hover:text-interactive-on-layer"
                                                            data-filteroverlay-checkbox="">
                                                            <input type="radio" id="sort-desc" name="sort" value="desc"
                                                                class="sr-only peer/filter-checkbox">

                                                            <span
                                                                class="block w-20 h-20 border rounded-full group-hover/filter-item:border-strong peer-checked/filter-checkbox:border-6 peer-checked/filter-checkbox:border-interactive-primary">
                                                            </span>

                                                            <span class="ml-12 text-secondary f-body-1">Newest to
                                                                Oldest</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div
                            class="sticky bottom-0 grid grid-cols-2 gap-4 mt-auto py-space-5 border-t border-subtle bg-layer">

                            <button type="button"
                                class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 bg-interactive-on-layer"
                                data-filteroverlay-reset="" data-behavior="Track" data-track-event="button_click"
                                data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:&quot;Reset&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                <span class="pt-1 text-inherit ">Reset</span>

                            </button>



                            <button type="button"
                                class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-primary hover:bg-mix-interactive-primary-8 active:bg-mix-interactive-primary-12 text-inverse f-ui-1 "
                                data-filteroverlay-apply="" data-behavior="Track" data-track-event="button_click"
                                data-track-data="{&quot;button_hierarchy&quot;:&quot;primary&quot;,&quot;call_to_action&quot;:&quot;Apply&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                <span class="pt-1 text-inherit ">Apply</span>

                            </button>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div id="filter-result-list" data-swup-fragment="">
            <div class="mt-space-5">


                <div class="container">
                    <ul class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-1">
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/march/every-brand-is-a-health-brand/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Every Brand is a Health Brand "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/wqrnyxyf/every-brand-is-a-health-brand-podcast-image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>12:03</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    Every Brand is a Health Brand
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
                                <a href="/videos/2025/february/don-abbey-on-digital-health-innovation-at-ces-2025/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Don Abbey on Digital Health Innovation at CES 2025"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/ojvjzvux/6369344305112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/ojvjzvux/6369344305112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/ojvjzvux/6369344305112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/ojvjzvux/6369344305112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/ojvjzvux/6369344305112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/ojvjzvux/6369344305112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/ojvjzvux/6369344305112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/ojvjzvux/6369344305112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/ojvjzvux/6369344305112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
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


                                <h3 class="outline-none f-heading-2">
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
                                <a href="/podcasts/2025/february/how-much-carbon-is-your-ad-budget-burning/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="How Much Carbon Is Your Ad Budget Burning? "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/tahljlbb/gettyimages-1437813144.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt="ALT Text: a girl sitting watching an ad on her phone"
                                            srcset="/media/tahljlbb/gettyimages-1437813144.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/tahljlbb/gettyimages-1437813144.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/tahljlbb/gettyimages-1437813144.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/tahljlbb/gettyimages-1437813144.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/tahljlbb/gettyimages-1437813144.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/tahljlbb/gettyimages-1437813144.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/tahljlbb/gettyimages-1437813144.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/tahljlbb/gettyimages-1437813144.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>11:29</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    How Much Carbon Is Your Ad Budget Burning?
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                    <a href="/discover/?topics=Sustainability"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Sustainability</span>
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
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
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


                                <h3 class="outline-none f-heading-2">
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
                                <a href="/podcasts/2025/february/the-power-of-ask-me-anything/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="The Power of Ask Me Anything "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/2uyncjfr/gettyimages-2157469657.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/2uyncjfr/gettyimages-2157469657.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/2uyncjfr/gettyimages-2157469657.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>11:29</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    The Power of Ask Me Anything
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
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
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
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


                                <h3 class="outline-none f-heading-2">
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
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/february/ray-ban-meta-frames-and-the-power-of-instant-translation/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Ray-Ban Meta Frames and the Power of Instant Translation "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/dppauvo0/gettyimages-2012746941.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/dppauvo0/gettyimages-2012746941.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/dppauvo0/gettyimages-2012746941.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/dppauvo0/gettyimages-2012746941.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/dppauvo0/gettyimages-2012746941.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/dppauvo0/gettyimages-2012746941.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/dppauvo0/gettyimages-2012746941.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/dppauvo0/gettyimages-2012746941.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/dppauvo0/gettyimages-2012746941.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>12:27</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    Ray-Ban Meta Frames and the Power of Instant Translation
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=AR%2fVR%2fXR"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">AR/VR/XR</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/success-stories/2025/february/kubota/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Kubota"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/zzobgwhs/kubota.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/zzobgwhs/kubota.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/zzobgwhs/kubota.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/zzobgwhs/kubota.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/zzobgwhs/kubota.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/zzobgwhs/kubota.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/zzobgwhs/kubota.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/zzobgwhs/kubota.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/zzobgwhs/kubota.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Case Study</span>


                                <h3 class="outline-none f-heading-2">
                                    Kubota
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Sustainability"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Sustainability</span>
                                    </a>

                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                    <a href="/discover/?topics=Vehicle+Tech+and+Advanced+Mobility"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Vehicle Tech
                                            and Advanced Mobility</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/february/ai-accountability-balancing-innovation-and-privacy/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="AI Accountability: Balancing Innovation and Privacy"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/jrrfc4ay/gettyimages-1979289147.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/jrrfc4ay/gettyimages-1979289147.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/jrrfc4ay/gettyimages-1979289147.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>11:52</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    AI Accountability: Balancing Innovation and Privacy
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/reinventing-workforce-development-in-the-era-of-ai-the-washington-dc-workforce-consortium-at-work/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Reinventing Workforce Development in the Era of AI - The Washington DC Workforce Consortium at Work"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/5icjsfza/6367963248112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/5icjsfza/6367963248112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/5icjsfza/6367963248112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/5icjsfza/6367963248112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/5icjsfza/6367963248112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/5icjsfza/6367963248112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/5icjsfza/6367963248112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/5icjsfza/6367963248112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/5icjsfza/6367963248112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>40:20</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    Reinventing Workforce Development in the Era of AI - The Washington DC Workforce
                                    Consortium at Work
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                    <a href="/discover/?topics=Diversity+and+Inclusion"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Diversity
                                            and Inclusion</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/ai-pcs-discover-a-new-world-of-experiences/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="AI PCs: Discover a New World of Experiences"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/3y5pe3a3/6367958610112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/3y5pe3a3/6367958610112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/3y5pe3a3/6367958610112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/3y5pe3a3/6367958610112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/3y5pe3a3/6367958610112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/3y5pe3a3/6367958610112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/3y5pe3a3/6367958610112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/3y5pe3a3/6367958610112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/3y5pe3a3/6367958610112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>39:24</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    AI PCs: Discover a New World of Experiences
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/genai-for-everyday-experience/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label=" GenAI for Everyday Experience"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/acbnhl3l/6367954174112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/acbnhl3l/6367954174112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/acbnhl3l/6367954174112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/acbnhl3l/6367954174112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/acbnhl3l/6367954174112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/acbnhl3l/6367954174112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/acbnhl3l/6367954174112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/acbnhl3l/6367954174112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/acbnhl3l/6367954174112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>39:17</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    GenAI for Everyday Experience
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/ai-at-the-edge-transforming-industries-and-the-workplace/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label=" AI at the Edge: Transforming Industries and the Workplace"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/k3wdq430/6367953213112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/k3wdq430/6367953213112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/k3wdq430/6367953213112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/k3wdq430/6367953213112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/k3wdq430/6367953213112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/k3wdq430/6367953213112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/k3wdq430/6367953213112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/k3wdq430/6367953213112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/k3wdq430/6367953213112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>42:21</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    AI at the Edge: Transforming Industries and the Workplace
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/january/the-future-of-programmatic-advertising-with-generative-ai/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="The Future of Programmatic Advertising with Generative AI "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/is5fqejv/gettyimages-2072805054.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/is5fqejv/gettyimages-2072805054.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/is5fqejv/gettyimages-2072805054.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/is5fqejv/gettyimages-2072805054.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/is5fqejv/gettyimages-2072805054.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/is5fqejv/gettyimages-2072805054.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/is5fqejv/gettyimages-2072805054.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/is5fqejv/gettyimages-2072805054.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/is5fqejv/gettyimages-2072805054.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>12:51</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    The Future of Programmatic Advertising with Generative AI
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/success-stories/2025/january/3m/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="3M"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/gjedly2c/3m-hero_1500x750.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/gjedly2c/3m-hero_1500x750.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/gjedly2c/3m-hero_1500x750.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/gjedly2c/3m-hero_1500x750.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/gjedly2c/3m-hero_1500x750.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/gjedly2c/3m-hero_1500x750.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/gjedly2c/3m-hero_1500x750.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/gjedly2c/3m-hero_1500x750.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/gjedly2c/3m-hero_1500x750.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Case Study</span>


                                <h3 class="outline-none f-heading-2">
                                    3M
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Vehicle+Tech+and+Advanced+Mobility"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Vehicle Tech
                                            and Advanced Mobility</span>
                                    </a>

                                    <a href="/discover/?topics=Robotics"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Robotics</span>
                                    </a>

                                    <a href="/discover/?topics=Sustainability"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Sustainability</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/championing-startups/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Championing Startups"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/slmfasyv/6367455234112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/slmfasyv/6367455234112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/slmfasyv/6367455234112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/slmfasyv/6367455234112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/slmfasyv/6367455234112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/slmfasyv/6367455234112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/slmfasyv/6367455234112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/slmfasyv/6367455234112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/slmfasyv/6367455234112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>02:45</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    Championing Startups
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Startups"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Startups</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/january/how-ai-is-reshaping-business-operations-responsibly/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="How AI is Reshaping Business Operations Responsibly"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/d1vem0k3/ai-in-business.jpg?rxy=0.43609022556390975,0.48986544700837453&amp;width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>11:17</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    How AI is Reshaping Business Operations Responsibly
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/a-quick-look-of-whats-hot-at-ces-2025/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="A Quick Look of What's Hot at CES 2025"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/i5mjb1n4/6366929767112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/i5mjb1n4/6366929767112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/i5mjb1n4/6366929767112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/i5mjb1n4/6366929767112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/i5mjb1n4/6366929767112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/i5mjb1n4/6366929767112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/i5mjb1n4/6366929767112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/i5mjb1n4/6366929767112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/i5mjb1n4/6366929767112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>00:52</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    A Quick Look of What's Hot at CES 2025
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/ces-2025-enterprise-evolution/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="CES 2025: Enterprise Evolution"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/wfolaonu/6366913545112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/wfolaonu/6366913545112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/wfolaonu/6366913545112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/wfolaonu/6366913545112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/wfolaonu/6366913545112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/wfolaonu/6366913545112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/wfolaonu/6366913545112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/wfolaonu/6366913545112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/wfolaonu/6366913545112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>04:46</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    CES 2025: Enterprise Evolution
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/articles/2025/january/2025-best-of-ces-winners/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="2025 Best of CES Winners, Awarded by CNET Group"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/hwuapqdw/cnet-best.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/hwuapqdw/cnet-best.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/hwuapqdw/cnet-best.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/hwuapqdw/cnet-best.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/hwuapqdw/cnet-best.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/hwuapqdw/cnet-best.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/hwuapqdw/cnet-best.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/hwuapqdw/cnet-best.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/hwuapqdw/cnet-best.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Article</span>


                                <h3 class="outline-none f-heading-2">
                                    2025 Best of CES Winners, Awarded by CNET Group
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                    <a href="/discover/?topics=Vehicle+Tech+and+Advanced+Mobility"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Vehicle Tech
                                            and Advanced Mobility</span>
                                    </a>

                                    <a href="/discover/?topics=Lifestyle"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span
                                            class="block whitespace-nowrap overflow-hidden text-ellipsis">Lifestyle</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/podcasts/2025/january/ces-2025-trends-that-will-shape-the-year/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="CES 2025: Trends That Will Shape the Year "></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt="ALT Text: A woman looking up with a bunch of zeros and ones filtered in front"
                                            srcset="/media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/t0hl1xfm/trends-that-will-shape-the-year.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>21:41</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Podcast</span>


                                <h3 class="outline-none f-heading-2">
                                    CES 2025: Trends That Will Shape the Year
                                </h3>



                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/unlocking-the-human-component-the-art-of-impactful-tech-storytelling/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Unlocking the Human Component: The Art of Impactful Tech Storytelling"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/is5j3ons/6366889260112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/is5j3ons/6366889260112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/is5j3ons/6366889260112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/is5j3ons/6366889260112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/is5j3ons/6366889260112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/is5j3ons/6366889260112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/is5j3ons/6366889260112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/is5j3ons/6366889260112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/is5j3ons/6366889260112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>39:32</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    Unlocking the Human Component: The Art of Impactful Tech Storytelling
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Marketing+and+Advertising"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Marketing
                                            and Advertising</span>
                                    </a>

                                    <a href="/discover/?topics=Content+and+Entertainment"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Content and
                                            Entertainment</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/from-red-tape-to-real-time-unlocking-government-efficiency-with-ai-data-and-digital-agents/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="From Red Tape to Real-Time: Unlocking Government Efficiency with AI, Data, and Digital Agents"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/24dgqjdm/6366889332112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/24dgqjdm/6366889332112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/24dgqjdm/6366889332112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/24dgqjdm/6366889332112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/24dgqjdm/6366889332112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/24dgqjdm/6366889332112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/24dgqjdm/6366889332112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/24dgqjdm/6366889332112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/24dgqjdm/6366889332112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>42:16</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    From Red Tape to Real-Time: Unlocking Government Efficiency with AI, Data, and
                                    Digital Agents
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Artificial+Intelligence"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Artificial
                                            Intelligence</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                        <li class="">



                            <div
                                class="relative flex flex-col h-full group p-16 pb-24 rounded-lg bg-layer text-primary transition group/card">
                                <a href="/videos/2025/january/advanced-mobility-the-road-ahead/"
                                    class="absolute inset-0 after:content-[''] after:absolute after:inset-0 after:z-1"
                                    aria-label="Advanced Mobility: The Road Ahead"></a>


                                <div class="relative mb-space-4">
                                    <div class="flex justify-center items-center h-full aspect-16/9">
                                        <img src="/media/frzfz14w/6366887558112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80"
                                            alt=""
                                            srcset="/media/frzfz14w/6366887558112_image.jpg?width=250&amp;height=140&amp;format=webp&amp;quality=80 250w, /media/frzfz14w/6366887558112_image.jpg?width=500&amp;height=281&amp;format=webp&amp;quality=80 500w, /media/frzfz14w/6366887558112_image.jpg?width=750&amp;height=421&amp;format=webp&amp;quality=80 750w, /media/frzfz14w/6366887558112_image.jpg?width=1000&amp;height=562&amp;format=webp&amp;quality=80 1000w, /media/frzfz14w/6366887558112_image.jpg?width=1250&amp;height=703&amp;format=webp&amp;quality=80 1250w, /media/frzfz14w/6366887558112_image.jpg?width=1500&amp;height=843&amp;format=webp&amp;quality=80 1500w, /media/frzfz14w/6366887558112_image.jpg?width=2000&amp;height=1125&amp;format=webp&amp;quality=80 2000w, /media/frzfz14w/6366887558112_image.jpg?width=2500&amp;height=1406&amp;format=webp&amp;quality=80 2500w"
                                            sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 48vw, (min-width: 1024px) and (max-width: 1279px) 48vw, (min-width: 1280px) and (max-width: 1679px) 24vw, (min-width: 1680px) and (max-width: 1919px) 24vw, (min-width: 1920px) 24vw"
                                            loading="lazy" class="w-full h-full object-cover rounded-md">
                                    </div>
                                    <span
                                        class="absolute bottom-12 left-12 flex items-center min-h-28 px-12 bg-on-image text-light f-ui-1 rounded-full backdrop-blur-20">
                                        <svg class="mr-4" width="12" height="12" aria-hidden="true">
                                            <use xlink:href="#play-filled-12"></use>
                                        </svg>


                                        <span>18:59</span>
                                    </span>


                                </div>


                                <span class="block mb-space-3 f-ui-1 text-tertiary">Video</span>


                                <h3 class="outline-none f-heading-2">
                                    Advanced Mobility: The Road Ahead
                                </h3>


                                <div class="relative flex flex-wrap gap-y-8 gap-x-4 mt-auto pt-space-6 z-2">
                                    <a href="/discover/?topics=Vehicle+Tech+and+Advanced+Mobility"
                                        class="inline-flex items-center max-w-full h-28 px-12 bg-interactive-on-layer hover:bg-mix-interactive-on-layer-8 text-secondary f-ui-1 rounded-full transition-all duration-100 ">
                                        <span class="block whitespace-nowrap overflow-hidden text-ellipsis">Vehicle Tech
                                            and Advanced Mobility</span>
                                    </a>

                                </div>

                            </div>


                        </li>
                    </ul>
                </div>

            </div>


            <div class="container mt-space-6" data-behavior="Pagination">
                <div class="cols-container items-center">
                    <div class="flex items-center w-12-cols md:w-6-cols">

                        <button type="button"
                            class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 w-full md:w-auto"
                            disabled="disabled" aria-label="Previous Page" data-behavior="Track"
                            data-track-event="button_click"
                            data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                            <svg class="icon-transition " width="24" height="24" aria-hidden="true">
                                <use xlink:href="#arrow-left-24"></use>
                            </svg>

                        </button>



                        <a href="/discover/?page=2"
                            class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none rounded-full min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 w-full md:w-auto ml-4"
                            data-pagination-link="" aria-label="Next Page" data-behavior="Track"
                            data-track-event="button_click"
                            data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:null,&quot;action&quot;:&quot;new_page&quot;}">


                            <svg class="icon-transition " width="24" height="24" aria-hidden="true">
                                <use xlink:href="#arrow-right-24"></use>
                            </svg>

                        </a>


                        <p class="hidden md:block ml-24 f-body-1">
                            1 - 24 of 1570 items
                        </p>
                    </div>

                    <div class="w-12-cols md:w-6-cols mt-20 md:mt-0 text-center md:text-right">
                        <div class="md:flex md:items-center md:justify-end">
                            <div class="relative hidden md:block mr-12">
                                <select
                                    class="inline-flex items-center h-48 pl-20 pr-32 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 transition-colors duration-100 text-primary f-ui-1 rounded cursor-pointer appearance-none"
                                    aria-label="Select Page" data-pagination-select="">
                                    <option value="1" selected="selected">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                </select>

                                <svg class="absolute top-1/2 right-16 -translate-y-1/2 text-primary pointer-events-none"
                                    width="16" height="16" aria-hidden="true">
                                    <use xlink:href="#caret-down-16"></use>
                                </svg>

                            </div>

                            <p class="f-body-1">
                                <span class="md:sr-only">1</span> of 66 Pages
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <span data-content-bottom=""></span>


        <div>


            <div class="block-container-full">
                <div class="theme-inverse container relative p-space-5 rounded bg-layer text-primary transition">
                    <div class="cols-container flex-col-reverse lg:flex-row">
                        <div class="lg:flex lg:flex-col w-12-cols lg:w-6-cols mt-24 lg:mt-0">

                            <h2 class="outline-none text-secondary f-heading-6">
                                CES is the Global Stage for Innovation
                            </h2>


                            <div class="rich-text mt-space-4 f-body-4">
                                <p>CES is the most powerful tech event in the world – the proving ground for
                                    breakthrough technologies and global innovators. Sign up to be notified when
                                    registration for CES 2026 opens.</p>
                            </div>


                            <div class="flex flex-col items-start gap-space-3 mt-24 md:mt-32">

                                <a href="/attend/registration-notification/"
                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-primary hover:bg-mix-interactive-primary-8 active:bg-mix-interactive-primary-12 text-inverse f-ui-1 "
                                    data-behavior="Track" data-track-event="button_click"
                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;primary&quot;,&quot;call_to_action&quot;:&quot;Sign up now&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                    <span class="pt-1 text-inherit  mr-12">Sign up now</span>

                                    <svg class="icon-transition  shrink-0 pointer-events-none -mr-4" width="20"
                                        height="20" aria-hidden="true">
                                        <use xlink:href="#arrow-right-20"></use>
                                    </svg>

                                </a>



                                <a href="/attend/attendee-overview/"
                                    class="inline-flex justify-center items-center transition-colors duration-100 disabled:opacity-30 disabled:pointer-events-none px-20 rounded min-w-48 min-h-48 py-12 bg-interactive-on-background hover:bg-mix-interactive-on-background-8 active:bg-mix-interactive-on-background-12 text-primary f-ui-1 "
                                    data-behavior="Track" data-track-event="button_click"
                                    data-track-data="{&quot;button_hierarchy&quot;:&quot;secondary&quot;,&quot;call_to_action&quot;:&quot;Why Attend&quot;,&quot;action&quot;:&quot;new_page&quot;}">

                                    <span class="pt-1 text-inherit  mr-12">Why Attend</span>

                                    <svg class="icon-transition  shrink-0 pointer-events-none -mr-4" width="20"
                                        height="20" aria-hidden="true">
                                        <use xlink:href="#arrow-right-20"></use>
                                    </svg>

                                </a>

                            </div>

                            <div
                                class="flex flex-col md:flex-row md:flex-wrap items-baseline gap-space-4 lg:mt-auto pt-40">


                                <a href="/attendee-guides/attendee-opportunities/"
                                    class="inline-flex justify-between items-center transition-colors duration-100 underline-default hover:underline-transparent underline-offset-4 decoration-1 f-body-2 ">

                                    <span class="text-inherit ">Attendee Opportunities</span>

                                </a>


                                <a href="/attendee-guides/registration-information/"
                                    class="inline-flex justify-between items-center transition-colors duration-100 underline-default hover:underline-transparent underline-offset-4 decoration-1 f-body-2 ">

                                    <span class="text-inherit ">Registration Information</span>

                                </a>


                                <a href="/attendee-guides/"
                                    class="inline-flex justify-between items-center transition-colors duration-100 underline-default hover:underline-transparent underline-offset-4 decoration-1 f-body-2 ">

                                    <span class="text-inherit ">Attendee Guides</span>

                                </a>

                            </div>
                        </div>

                        <div class="w-12-cols lg:w-6-cols">

                            <div class="relative lg:h-full lg:[&amp;_>div]:aspect-auto">
                                <div class="flex justify-center items-center h-full aspect-3/2">
                                    <img src="/media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=1000&amp;height=666&amp;format=webp&amp;quality=80"
                                        alt="Alt text: A woman with short dark hair in an orange jacket stands confidently against a vibrant, abstract background with flowing shapes in pink, green, and white."
                                        srcset="/media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=250&amp;height=166&amp;format=webp&amp;quality=80 250w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=500&amp;height=333&amp;format=webp&amp;quality=80 500w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=750&amp;height=500&amp;format=webp&amp;quality=80 750w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=1000&amp;height=666&amp;format=webp&amp;quality=80 1000w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=1250&amp;height=833&amp;format=webp&amp;quality=80 1250w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=1500&amp;height=1000&amp;format=webp&amp;quality=80 1500w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=2000&amp;height=1333&amp;format=webp&amp;quality=80 2000w, /media/sjvp2o3h/24-cta-2523_ces25-topicpage-ai-autotech_3200x1600.jpg?width=2500&amp;height=1666&amp;format=webp&amp;quality=80 2500w"
                                        sizes="(max-width: 539px) 96vw, (min-width: 540px) and (max-width: 767px) 96vw, (min-width: 768px) and (max-width: 1023px) 96vw, (min-width: 1024px) and (max-width: 1279px) 96vw, (min-width: 1280px) and (max-width: 1679px) 48vw, (min-width: 1680px) and (max-width: 1919px) 48vw, (min-width: 1920px) 48vw"
                                        loading="lazy" class="w-full h-full object-cover rounded-md">
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>
@include('layouts.footer')
<x-app-layouts>