@extends('layouts.app')

@section('title')
    Latest Movie
@endsection

@section('content')
    <div class="flex flex-col gap-4 md:gap-6 mb-10 lg:mb-48 min-h-screen">
        <div class="flex flex-col">
            <div class="max-w-5xl mx-auto flex flex-col py-10 lg:py-12 gap-4 px-4 lg:px-0">
                <div class="w-full flex font-semibold text-lg md:text-xl">
                    <p>Title : </p>
                    <p>&nbsp;{{$data['title']}}</p>
                </div>
                <div class="w-full flex font-semibold text-lg md:text-xl">
                    <p>Overview : </p>
                    <p>&nbsp;{{$data['overview']}}</p>
                </div>
                <div class="w-full flex font-semibold text-lg md:text-xl">
                    <p>Release Date : </p>
                    <p>&nbsp;{{releaseDate($data['release_date'])}}</p>
                </div>
                <div class="w-full flex font-semibold text-lg md:text-xl">
                    <p>Title : </p>
                    <p>&nbsp;{{$data['title']}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
