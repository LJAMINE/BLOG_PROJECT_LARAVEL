<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Action Links -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-medium text-gray-800">Article Management</h3>
            <div class="mt-4 space-y-4">
                <!-- List Articles Link -->
                <a href="/articles" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                    List Articles
                </a>
                <!-- Create Article Link -->
                <a href="/form" class="inline-block px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200">
                    Create Article
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
