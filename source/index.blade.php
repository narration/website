@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">
                Narration is a modern PHP Framework. <br class="hidden sm:block">It enforces the implementation of proven patterns to bring resilience, reliability, and coordination to your web application.
            </p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-indigo hover:bg-indigo-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://jigsaw.tighten.co" title="Jigsaw by Tighten" class="bg-grey-light hover:bg-grey-dark text-indigo-darkest font-normal hover:text-white rounded py-2 px-6">View Source</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-ddd.svg" class="h-12 w-12" alt="modules icon">

            <h3 id="intro-laravel" class="text-2xl text-indigo-darkest mb-0">DDD Oriented Code Architecture</h3>

            <p>Blade is a powerful, simple, and beautiful templating language, and now you can use it for your static sites, not just your Laravel-powered apps.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-puzzle.svg" class="h-12 w-12" alt="puzzle icon">

            <h3 id="intro-markdown" class="text-2xl text-indigo-darkest mb-0">Zero-Coupling to the Framework</h3>

            <p>Markdown is the web’s leading format for writing articles, blog posts, documentation, and more. Jigsaw makes it painless to work with Markdown content.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-globe.svg" class="h-12 w-12" alt="globe icon">

            <h3 id="intro-mix" class="text-2xl text-indigo-darkest mb-0">Scalable PSR-7 and PSR-15 Compilant</h3>

            <p>Jigsaw comes pre-configured with Laravel Mix, a simple and powerful build tool. Use the latest frontend tech with just a few lines of code.</p>
        </div>
    </div>
</section>
@endsection
