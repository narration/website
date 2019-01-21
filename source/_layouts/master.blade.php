<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-4xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 md:h-10 mr-3 fill-current text-indigo" viewBox="0 0 51200 51200" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><rect width="51200" height="51200" rx="6050" ry="5905" fill="#718fc8"/><path d="M51200 28886v16264c0 3328-2722 6050-6050 6050H18931L9496 36803c-215-309-423-625-620-947-1831-2983-2887-6494-2887-10251 0-8269 5113-15342 12351-18234v-1l6-2c1530-610 3154-1034 4846-1243l16176 24682c201-530 372-1076 511-1633L28008 11061V6115c6061 747 11265 4256 14317 9229l8875 13542zM34971 14240l-1014-768c350 242 688 498 1014 768zm-1014-768l-1079-680c370 211 730 438 1079 680zm-1079-680l-1141-587c390 180 771 375 1141 587zm-1141-587l-1195-487c407 145 806 307 1195 487zm-1195-487l-1245-383c422 109 838 237 1245 383zm-1245-383l-1289-274c437 72 866 164 1289 274zm8966 6754l-697-1068c247 345 480 701 697 1068zm-697-1068l-785-1000c276 322 538 655 785 1000zm-785-1000l-867-929c302 297 592 607 867 929zm-867-929l-943-852c327 270 641 555 943 852zM10945 26960l181 1321c-79-434-140-874-181-1321zm181 1321l295 1281c-117-420-215-847-295-1281zm295 1281l404 1235c-152-403-287-816-404-1235zm404 1235l507 1185c-186-385-355-781-507-1185zm507 1185l605 1129c-217-366-420-743-605-1129zm605 1129l697 1068c-247-346-480-701-697-1068zm-869-13305l-352 905c108-306 225-608 352-905zm-352 905l-294 932c88-316 187-625 294-932zm-294 932l-232 958c67-324 145-643 232-958zm-232 958l-168 981c45-330 102-658 168-981zm-168 981l-104 1002c23-337 58-671 104-1002zm-104 1002l-34 1021c0-344 11-683 34-1021zm-34 1021l61 1355c-41-446-61-899-61-1355zm5856-11759l-742 600c241-208 488-408 742-600zm-742 600l-702 646c227-223 461-438 702-646zm-702 646l-659 689c212-236 432-467 659-689zm-659 689l-613 732c196-251 401-495 613-732zm-613 732l-566 770c180-263 369-520 566-770zm-566 770l-517 808c163-276 337-545 517-808zm-517 808l-463 841c145-287 300-566 463-841zm-463 841l-410 874c128-296 264-588 410-874zm5862-6139l-818 501c266-175 539-343 818-501zm-818 501l-782 552c254-192 515-377 782-552z" fill="#5776ae"/><path d="M23206 40151c-6944-1159-12239-7229-12239-14546 0-5494 2985-10286 7413-12822v15245h9614v17063c1683-210 3298-634 4819-1245l7-2v-1c7196-2893 12280-9972 12280-18248 0-10026-7464-18298-17106-19495v4950c6944 1158 12239 7229 12239 14545 0 5494-2985 10286-7413 12822V23172h-9614V6110c-1683 209-3298 633-4819 1245l-7 2c-7196 2893-12280 9973-12280 18248 0 10027 7464 18299 17106 19495v-4949z" fill="#fefefe"/></svg>

                        <h1 class="text-lg md:text-2xl text-indigo-darkest font-semibold hover:text-indigo-dark my-0 pr-4">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; <a href="https://narrationphp.com" title="Narration Framework">Narration Framework</a> {{ date('Y') }}.
                </li>

                <li class="md:mr-2">
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>

                <li class="md:mr-2">
                    Logo by <a href="https://github.com/mirzazulfan" title="Mirza Zulfan">Mirza Zulfan</a>.
                </li>

                <li>
                    Icons made by <a href="https://smashicons.com/" title="Smashicons">Smashicons</a>.
                </li>
            </ul>
        </footer>
    </body>
</html>
