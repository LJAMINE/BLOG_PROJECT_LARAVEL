<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <ul>
        @foreach ($categories as $categorie)
            <li>
                {{-- <a href="{{ route('categories.show') }}"> </a> --}}
                <div>
                    <h3>{{ $categorie->name }}</h3>
                </div>
                </a>

            </li>
        @endforeach

    </ul>
</body>

</html>