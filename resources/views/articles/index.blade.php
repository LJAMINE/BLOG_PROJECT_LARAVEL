<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>article</h1>

    <table>
        <thead>
            <th>title</th>
            <th>content</th>
            <th>status</th>
            <th>created at</th>
            <th>category</th>
            <th>user</th>
        </thead>
        <tbody>
        @foreach ($articles as $article )

        <tr>
            <td>
                {{ $article->title }}
            </td>
            <td>
                {{ $article->content }}
            </td>
            <td>
                {{ $article->status }}
            </td>
            <td>
                {{ $article->created_at }}
            </td>
            <td>
                {{ $article->category->name }}
            </td>
            <td>
                {{ $article->user->name }}
            </td>
        </tr>


        @endforeach
        </tbody>
    </table>

</body>

</html>
