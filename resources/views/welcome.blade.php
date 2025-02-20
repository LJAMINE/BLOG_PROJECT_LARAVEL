<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <h1>hi amine</h1>

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <a href="/articles" class="btn mt-4 inline-block">
        find articles
    </a>
    <a href="/categories" class="btn mt-4 inline-block">
        find categories
    </a>

</body>

</html>
