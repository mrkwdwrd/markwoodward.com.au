<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }} | {{ $page->description }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script defer src="{{ mix('js/all.min.js', 'assets/build') }}"></script>
        <script defer src="{{ mix('js/fontawesome.min.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-200 font-sans antialiased bg-gray-900">
        <header class="font-bold p-2">
            <nav class="w-full m-auto flex justify-between content-center">
                <h2 class="px-2">{!! $page->title !!}</h2>
                <ul class="flex content-center">
                    <li class="px-6"><a href="{!! url('/uses') !!}">Uses</a></li>
                    <li class="px-2"><a href="https://www.twitter.com/kid_genius" text="@kid_genius on Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="px-2"><a href="https://www.instagram.com/kilroyj" title="@kilroyj on Instragram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="px-2"><a href="https://github.com/mrkwdwrd" title="mrkwdwrd on GitHub" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </nav>
        </header>
        @yield('body')
        <footer class="w-full px-8 m-auto flex justify-between content-center text-gray-700">
            <p class="w-full text-center text-sm">Built with <a href="https://jigsaw.tighten.com" title="Jigsaw" target="_blank">Jigsaw</a> by <a href="https://tighten.com" title="Tighten" target="_blank">Tighten</a> and <a href="https://tailwindcss.com" title="Tailwind" target="_blank">TailwindCSS</a>. <br />
                📷 by <a href="https://www.instagram.com/photos_by_frankhandrum" title="Frank Handrum - Melbourne based headshot and portrait photographer" target="_blank">Frank Handrum</a>.
            </p>
        </footer>
    </body>
</html>
