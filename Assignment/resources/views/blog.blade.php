@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">My Blog</h1>
            <p class="text-xl text-gray-600">Thoughts, tutorials, and development logs.</p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <article class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3 text-gray-500">
                        <span class="text-sm font-medium bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded">Flutter</span>
                        <span class="text-sm">Oct 23, 2026</span>
                    </div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-2">
                        <a href="#">Structuring a Flutter App with Clean Architecture</a>
                    </h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">A breakdown of how I organize my screens, widgets, and models in a standard Flutter project to keep code modular and easy to debug.</p>
                    <a href="#" class="inline-flex items-center font-medium text-blue-600 hover:underline">
                        Read more
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3 text-gray-500">
                        <span class="text-sm font-medium bg-green-100 text-green-800 px-2.5 py-0.5 rounded">Laravel</span>
                        <span class="text-sm">Oct 15, 2026</span>
                    </div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-2">
                        <a href="#">Fixing Vite Manifest Errors in Laravel</a>
                    </h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Why the `Illuminate\Foundation\ViteManifestNotFoundException` happens and how to properly configure your package.json to fix it.</p>
                    <a href="#" class="inline-flex items-center font-medium text-blue-600 hover:underline">
                        Read more
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>

        </div>
    </div>
</div>
@endsection