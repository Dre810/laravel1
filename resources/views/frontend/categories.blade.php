@extends('frontend.layout')
@section(section: 'content')


    <!-- Categories Grid -->
    <section class="py-16 px-6 max-w-6xl mx-auto">
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Technology</h3>
          <p class="text-gray-600 mb-4">The latest trends, tutorials, and innovations shaping our digital world.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Design</h3>
          <p class="text-gray-600 mb-4">Creative ideas, UI/UX insights, and visual inspiration for designers.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Lifestyle</h3>
          <p class="text-gray-600 mb-4">Guides and personal stories to help you balance work and life better.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Business</h3>
          <p class="text-gray-600 mb-4">Entrepreneurship tips, productivity hacks, and success stories.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Travel</h3>
          <p class="text-gray-600 mb-4">Explore destinations, cultures, and experiences around the world.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:shadow-2xl transition">
          <h3 class="text-xl font-bold text-indigo-600 mb-3">Finance</h3>
          <p class="text-gray-600 mb-4">Smart tips on saving, investing, and achieving financial independence.</p>
          <a href="#" class="text-indigo-600 hover:underline font-semibold">Explore →</a>
        </div>

      </div>
    </section>

    @endsection
