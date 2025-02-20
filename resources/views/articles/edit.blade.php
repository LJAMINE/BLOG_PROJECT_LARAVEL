<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>edit page</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <input type="text" name="title" value="{{old('title', $article->title)}}" id=""><br>
            <textarea name="content" required>{{ old('content', $article->content) }}</textarea>

            <select name="category_id" id="">
                @foreach ($categories as $category)

                    <option value="{{ $category->id }}">
                        {{$category->name}}

                    </option>
                @endforeach
            </select>

        </div>

        <button type="submit">Update Article</button>

    </form>
</body>

</html>