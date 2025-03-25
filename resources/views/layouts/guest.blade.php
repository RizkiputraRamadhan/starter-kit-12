<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Rizki Putra Ramadhan')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_2.png') }}" type="image/x-icon">
    <!-- HTML Meta Tags -->
    <title>Portofolio Rizki Putra Ramadhan</title>
    <meta name="description"
        content="Explore the portfolio of Rizki Putra Ramadhan – a developer passionate about crafting impactful digital solutions.">
    <meta name="google-site-verification" content="Yl7oHusVyqGI9iHouZgnIAsnLrdIXfYdvpOZgvaOAy8" />
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://rizki-putra-ramadhan.laravel.cloud">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portofolio Rizki Putra Ramadhan">
    <meta property="og:description"
        content="Explore the portfolio of Rizki Putra Ramadhan – a developer passionate about crafting impactful digital solutions.">
    <meta property="og:image" content="{{ asset('assets/img/porto.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="rizki-putra-ramadhan.laravel.cloud">
    <meta property="twitter:url" content="https://rizki-putra-ramadhan.laravel.cloud">
    <meta name="twitter:title" content="Portofolio Rizki Putra Ramadhan">
    <meta name="twitter:description"
        content="Explore the portfolio of Rizki Putra Ramadhan – a developer passionate about crafting impactful digital solutions.">
    <meta name="twitter:image" content="{{ asset('assets/img/porto.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative isolate -mt-8 overflow-hidden bg-white px-2 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute top-0 left-[max(50%,25rem)] h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0"
                    fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>

        <header>
            @include('livewire.pages.client.hero')
        </header>

        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:grid-cols-1 lg:items-start lg:gap-y-10">
            <div class="mb-3 lg:mx-auto lg:w-full lg:px-8"
                style="background: radial-gradient(circle, transparent 20%, #ffffff 20%, #ffffff 80%, transparent 80%, transparent) 0% 0% / 64px 64px, radial-gradient(circle, transparent 20%, #ffffff 20%, #ffffff 80%, transparent 80%, transparent) 32px 32px / 64px 64px, linear-gradient(#f2f2f2 2px, transparent 2px) 0px -1px / 32px 32px, linear-gradient(90deg, #f2f2f2 2px, #ffffff 2px) -1px 0px / 32px 32px #ffffff; background-size: 64px 64px, 64px 64px, 32px 32px, 32px 32px; background-color: #ffffff;">
                <div class="p-2 lg:p-10">
                    <div class="pb-3">
                        {{ $slot }}
                        @livewireScripts
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    window.isFollowing = {{ $isFollowing ? 'true' : 'false' }};
    window.csrfToken = '{{ csrf_token() }}';
    window.chartData = {
        labels: @json(collect($growth)->pluck('month')),
        counts: @json(collect($growth)->pluck('count'))
    };
</script>

</html>
