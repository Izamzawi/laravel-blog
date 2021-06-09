@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if(session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-1/5 mb-4 text-gray-50 font-bold bg-green-500 rounded-2xl py-4 px-4">
        {{ session()->get('message') }}
    </p>
</div>
@endif

@if(Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create" class="bg-blue-500 bg-transparent text-gray-100 text-s font-bold py-3 px-5 rounded-3xl">
        Create a new post
    </a>
</div>
@endif

@foreach($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ Storage::disk('s3')->url('images/' . $post->image_path) }}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, {{ $post->created_at->diffForHumans() }}.
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->content }}
        </p>
        <a href="/blog/{{ $post->slug }}" class="bg-blue-500 text-gray-100 text-s font-bold py-4 px-6 rounded-3xl">
            Keep reading...
        </a>
    </div>
</div>
@endforeach

@endsection
