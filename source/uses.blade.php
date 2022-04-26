@extends('_layouts.main')

@section('body')
<div class="p-8 w-full max-w-3xl m-auto text-center font-semibold">
    <h1 class="text-3xl font-bold mb-4">Things I use/work with (not exhaustive)</h1>

    <div class="text-left">
        <h4 class="text-xl text-gray-600">Technologies</h4>
        <ul class="flex flex-wrap justify-evenly mt-4 mb-8">
        @foreach($page->uses->techonologies as $techonology)
            <li class="flex grow text-center align-bottom">
                <a href="{{ $techonology->url }}" title="{{ $techonology->name }}" target="_blank">
                    <img src="{{ url('assets/images/' . $techonology->icon) }}" class="w-20 m-auto mb-1"/>
                    <span class="whitespace-nowrap text-sm">{{ $techonology->name }}</span>
                </a>
            </li>
        @endforeach
        </ul>

        <h4 class="text-xl text-gray-600">Software</h4>
        <dl class="mt-4 mb-8">
        @foreach($page->uses->software as $type => $software)
            <dt class="w-full p-2 md:float-left md:w-1/3 md:border-b-2 border-gray-600 text-gray-500">{{ $type }}</dt>
            <dd class="p-2 border-b-2 border-gray-600">
            @foreach($software as $app)
                <a href="{{ $app->url }}" title="{{ $app->name }}" target="_blank">{{ $app->name }}</a>
                @if(!$loop->last)
                 |
                @endif
            @endforeach
            </dd>
        @endforeach
        </dl>

        <h4 class="text-xl text-gray-600">Productivity/Misc.</h4>
        <dl class="mt-4 mb-8">
        @foreach($page->uses->misc as $type => $software)
            <dt class="w-full p-2 md:float-left md:w-1/3 md:border-b-2 border-gray-600 text-gray-500">{{ $type }}</dt>
            <dd class="p-2 border-b-2 border-gray-600">
            @foreach($software as $app)
                <a href="{{ $app->url }}" title="{{ $app->name }}" target="_blank">{{ $app->name }}</a>
                @if(!$loop->last)
                 |
                @endif
            @endforeach
            </dd>
        @endforeach
        </dl>
    </div>
</div>
@endsection
