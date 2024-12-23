@extends('layouts.app')
@section("content")
<main>

    @json($user)
    <h1 class="text-3xl font-bold text-blue-700">halo {{$name}} Kamu sedang belajar {{$grade}}</h1>

    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste vel quaerat cum molestias consequuntur velit neque est alias quia reiciendis error hic, omnis maiores sunt harum corrupti architecto earum dolorem.</p>

    <h3 class="text-xl font-bold text-center">Selamat belajar <span class="font-thin text-gray-500">{{$user['grade']}}</span> ya {{$user['name']}}</h3>

</main>
@endsection
