@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="flex flex-col gap-4 md:gap-6 mb-10 lg:mb-48 min-h-screen items-center">
        <div class="flex flex-col bg-white rounded-xl p-4 border my-auto max-w-md w-full">
            <form class="flex flex-col gap-3" action="{{route('login.authenticate')}}" method="POST">
                @csrf
                <div class="flex flex-col gap-2">
                    <label>Email</label>
                    <input type="text" name="email" class="border focus:outline-none p-2 rounded-xl ring-1 w-full" />
                </div>
                <div class="flex flex-col gap-2">
                    <label>Password</label>
                    <input type="password" name="password" class="border focus:outline-none p-2 rounded-xl ring-1 w-full" />
                </div>
                <button type="submit" class="bg-sky-600 text-white rounded-xl p-2">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
