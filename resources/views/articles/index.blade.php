<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-6 px-4">

        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Articles</h1>

        <!-- Flash Message for Success -->
        @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Articles Table -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Title</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Content</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Status</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Created At</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Category</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">User</th>
                    <th class="py-3 px-6 text-left text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @foreach ($articles as $article)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-4 px-6">{{ $article->title }}</td>
                    <td class="py-4 px-6">{{ $article->content }}</td>
                    <td class="py-4 px-6">{{ $article->status }}</td>
                    <td class="py-4 px-6">{{ $article->created_at }}</td>
                    <td class="py-4 px-6">{{ $article->category->name }}</td>
                    <td class="py-4 px-6">{{ $article->user->name }}</td>
                    <td class="py-4 px-6 flex items-center space-x-2">
                        <!-- Delete Form -->
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
                                Delete
                            </button>
                        </form>

                        <!-- Edit Link -->
                        <a href="{{ route('articles.edit', $article->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
