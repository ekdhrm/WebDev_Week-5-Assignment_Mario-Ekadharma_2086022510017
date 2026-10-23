@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center text-center py-20">
    <h1 class="text-5xl font-bold text-gray-900 mb-4">Hi, I'm Mario</h1>
    <p class="text-xl text-gray-600 mb-8 max-w-2xl">I am a developer focused on building clean, modular web and mobile applications.</p>
    <div class="flex space-x-4">
        <a href="/contact" class="px-6 py-3 bg-blue-600 text-white font-medium rounded hover:bg-blue-700">Get in touch</a>
        <a href="/about" class="px-6 py-3 bg-white border border-gray-300 text-gray-900 font-medium rounded hover:bg-gray-100">Learn more</a>
    </div>
</div>
@endsection