@extends('layouts.app')
@section('title', 'About Us - IBlog')
@section('content')
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="max-w-2xl mx-auto text-lg leading-relaxed">
            Welcome to IBlog! We are passionate about sharing the latest news, tutorials, and insights in technology, programming, and digital innovation.
            Our mission is to help developers, enthusiasts, and learners stay up-to-date and inspired in this fast-paced digital world.
        </p>
    </div>
</section>

<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <h2 class="text-2xl font-semibold mb-4">Our Story</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
            IBlog started as a small blog with a vision to make complex tech topics accessible to everyone. Over time, it has grown into a vibrant community of learners and experts who contribute their knowledge and experiences.
        </p>

        <h2 class="text-2xl font-semibold mb-4">What We Offer</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
            <li>In-depth articles on programming languages and frameworks</li>
            <li>Latest trends in AI, cloud computing, and cybersecurity</li>
            <li>Practical tutorials and how-to guides</li>
            <li>Expert interviews and industry insights</li>
        </ul>

        <h2 class="text-2xl font-semibold mb-4">Get In Touch</h2>
        <p class="text-gray-700 leading-relaxed">
            Have questions or want to collaborate? Feel free to reach out to us via our <a href="{{ route('contact') }}" class="text-blue-600 underline">Contact page</a>. We would love to hear from you!
        </p>
    </div>
</section>
@endsection
