@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 bock text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Welcome to my blog
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read more
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/09/05/22/33/office-925806_1280.jpg" alt="" width="700">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Want to be a better web developer?
        </h2>
        <p class="py-8 text-gray-500 text-s">
            Voluptate reprehenderit cillum sunt nulla. Quis in Lorem labore nisi.
        </p>
        <p class="font-extrabold text-gray-600 text-s pb-9">
            Do laboris sit occaecat in non nulla exercitation in qui sunt id labore aliquip elit. Labore do voluptate adipisicing incididunt amet cupidatat incididunt cupidatat ipsum proident ut. Do in magna irure laboris voluptate elit. Deserunt aute est aute esse.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find out more
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>
    <span class="font-extrabold block text-4xl -py-1">
        Backend Development
    </span>
    <span class="font-extrabold block text-4xl -py-1">
        Database Management
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Sit consectetur culpa in cupidatat tempor cupidatat ex tempor in mollit eiusmod ad anim consectetur. Aliquip anim sint id tempor ea. Irure in anim incididunt Lorem Lorem. Mollit aliqua nulla cupidatat nulla anim ut reprehenderit amet sunt labore minim non aliqua.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                {{ $recentPost->title }}
            </span>
            <h3 class="text-xl font-bold py-10">
                {{ Str::limit($recentPost->content, 100) }}.
            </h3>
            <a href="/blog/{{ $recentPost->slug }}" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs py-3 px-5 rounded-3xl">
                Find out more
            </a>
        </div>
    </div>
    <div>
        <img src="{{ Storage::disk('s3')->url('images/' . $recentPost->image_path) }}" alt="">
    </div>
</div>

@endsection
