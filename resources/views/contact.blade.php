@extends('layouts.app')
@section('title', 'Contact Us - IBlog')
@section('content')
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="max-w-2xl mx-auto text-lg leading-relaxed">
            Have questions, feedback, or want to collaborate? Send us a message and we'll get back to you soon.
        </p>
    </div>
</section>

<section class="py-12">
    <div class="container mx-auto px-4 max-w-lg">
        <form action="" method="POST" class="bg-white p-8 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Your name"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="your.email@example.com"
                >
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Write your message here..."
                ></textarea>
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition"
            >
                Send Message
            </button>
        </form>
    </div>
</section>
@endsection
