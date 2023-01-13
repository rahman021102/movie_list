@extends('layouts.guest')

@section('content')
    <div class="flex flex-col text-white">
        <div class="flex flex-row justify-between mt-6 mx-10">
            <h1 class="text-red-700 font-bold text-3xl">Actors</h1>
            <div class="flex flex-row space-x-8">
                <form action="/actors" method="POST">
                    @csrf
                    <input type="text" name="search" class="bg-gray-900 border-none rounded-md"
                        placeholder="Search Actor">
                </form>
                @auth
                    @if (Auth::user()->role == 'Admin')
                        <div class="flex flex-row space-x-6">
                            <a href="{{ route('new-actor') }}"
                                class="bg-red-500 hover:bg-red-700 transition-colors duration-300 ease-in-out p-2 rounded-md">Add
                                Actor</a>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
        <div class="grid grid-cols-5 gap-10 m-10">
            @foreach ($actors as $actor)
                <a href="{{ route('actor', $actor->id) }}"  class="flex flex-col p-4 bg-[#2d2d2d] rounded-md">
                    <div>
                        <img src="{{ asset('storage/' . $actor->image) }}" alt="{{ $actor->name }}">
                        <div class="flex flex-col mt-4 space-y-1">
                            <h1 class="font-bold text-xl">{{ $actor->name }}</h1>
                            @foreach ($actor->movies as $movie)
                                <h2 class="text-gray-500">{{ $movie->movie->title }}</h2>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
