<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('articles.store')}}" method="POST">
        @csrf

        <input type="text" name="title" id="" placeholder="title"><br>
        <input type="text" name="content" id="" placeholder="content"><br>
        <select name="category_id" id="">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Add Article">

    </form>

</body>

</html>