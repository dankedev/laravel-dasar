<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Landing Page dengan laravel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<body class="min-h-screen">
    <div class="bg-gray-200 text-gray-800 h-auto min-h-8 flex items-center">
        <div class="w-full max-w-screen-sm mx-auto flex items-center justify-between h-auto ">
            <a href="{{ route('home') }}">Logo</a>
            <ul class=" flex items-center">
                <li><a class="py-2 px-2 hover:bg-gray-300" href="{{route('single-post',['id'=>1111111])}}">Home</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    @yield("content")

    <footer class="text-center">Ini adalah Footer</footer>
</body>

</html>
