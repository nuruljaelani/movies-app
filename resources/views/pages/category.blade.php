@extends('layouts.app')

@section('title')
    {{ $categoryName }}
@endsection

@section('content')
    <div class="max-w-5xl mx-auto my-4 md:my-12 lg:my-20 px-4 lg:px-0">
        <div class="flex flex-col gap-4 md:gap-6">
            <p class="text-lg md:text-xl lg:text-2xl font-bold">{{ $categoryName }}</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-4 lg:gap-6">
                @foreach ($data['results'] as $item)
                    <a href="{{ route('movies.show', ['id' => $item['id']]) }}">
                        <div class="flex flex-col bg-white">
                            <img src="{{ $img_path . $item['poster_path'] }}" alt="" class="rounded-lg" />
                            <p class="font-semibold">{{ $item['original_title'] }}</p>
                            <p class="text-gray-600 text-sm">{{ $item['release_date'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
