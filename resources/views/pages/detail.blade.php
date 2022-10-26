@extends('layouts.app')

@section('title')
    Detail Movie
@endsection

@section('content')
    <div class="flex flex-col gap-4 md:gap-6 mb-10 lg:mb-48 min-h-screen">
        <div class="flex flex-col relative">
            <div class="max-w-5xl mx-auto flex flex-col py-10 lg:py-12 md:flex-row gap-4 md:gap-6 lg:gap-8 px-4 lg:px-0">
                <div class="w-full md:w-1/3 z-20">
                    <img src="{{ $img_path . $data['poster_path'] }}" />
                </div>
                <div class="w-full md:w-2/3 flex flex-col z-20 gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-black md:text-white">{{ $data['title'] }}</p>
                        <div class="flex gap-2">
                            @foreach ($data['genres'] as $genre)
                                <p class="text-black bg-white text-xs font-medium rounded p-1">{{$genre['name']}}</p>
                            @endforeach
                        </div>
                    </div>
                    <p class="text-white font-medium">Realease Date : {{releaseDate($data['release_date'])}}</p>
                    <div class="flex gap-2">
                        <p class="text-white font-medium">Language :</p>
                        @foreach ($data['spoken_languages'] as $lang)
                            <p class="text-white font-medium">{{$lang['name']}}</p>
                        @endforeach
                    </div>
                    <p class="text-gray-300 font-semibold italic text-lg md:text-xl lg:text-2xl">{{$data['tagline']}}</p>
                    <div class="flex flex-col">
                        <p class="text-white text-lg md:text-xl lg:text-2xl font-semibold">Overview</p>
                        <p class="text-white text-base md:text-lg">{{$data['overview']}}</p>
                    </div>
                    <p class="text-white font-medium">Runtime : {{$data['runtime']}} minute</p>
                </div>
            </div>
            <div class="hidden md:block absolute z-10 brightness-50 saturate-50 grayscale h-fit top-0 mb-40">
                <img src="{{ $img_path . $data['backdrop_path'] }}" class="opacity-60" />
            </div>
        </div>
    </div>
@endsection
