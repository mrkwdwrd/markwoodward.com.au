@extends('_layouts.main')

@section('body')
<div class="p-8 w-full max-w-2xl m-auto text-center text-lg font-semibold">
    <img src="{!! url('assets/images/MarkWoodward-0234.jpg') !!}" class="w-72 h-72 border-4 border-gray-200 rounded-full mx-auto my-12"/>

    <h1 class="text-3xl font-bold mb-4">Hello, I'm Mark.</h1>

    <p class="mb-4">I'm a web developer from <a href="https://en.wikipedia.org/wiki/Melbourne" title="" target="_blank" class="text-purple-400">Naarm (Melbourne), Australia</a> where I work primarily at
        <a href="https://digitalbridge.com.au" title="" target="_blank" class="text-purple-400">Digital Bridge</a>.
        I come from an extensive design background and freelance as a graphic designer and illustrator.</p>

    <p class="mb-4">My specialties are <a href="https://laravel.com/" title="Laravel - The PHP Framework for Web artisans" target="_blank" class="text-purple-400">Laravel</a>,
        <a href="https://vuejs.org" title="VueJS - The Progressive JavaScript Framework" target="_blank" class="text-purple-400">VueJS</a> and
        <a href="https://reactjs.org/" title="React - A JavaScript library for building user interfaces" target="_blank" class="text-purple-400">React</a> but I also occasionally work in Python and and Java.</p>

    <p class="mb-4">When I'm not coding, I play music and act.</p>
</div>
@endsection
