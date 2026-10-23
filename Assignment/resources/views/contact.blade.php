@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-4 text-center">Contact Me</h1>
    <p class="text-center text-gray-600 mb-8">Have a question or want to work together? Leave a message.</p>

    <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
        <!-- CSRF Token would go here in a real Laravel form -->
        
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John Doe" required>
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@example.com" required>
        </div>

        <div class="mb-6">
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
            <input type="text" id="subject" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Let us know how I can help you" required>
        </div>

        <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your Message</label>
            <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Send message</button>
    </form>
</div>
@endsection