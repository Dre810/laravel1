@extends('frontend.layout')
@section(section: 'content')
    <!-- Hero Section -->
    <section class="text-center py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
      <div class="max-w-2xl mx-auto px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Discover Inspiring Stories & Ideas</h2>
        <p class="text-lg mb-6">Read the latest articles on tech, design, lifestyle, and creativity — written by passionate writers and thinkers.</p>
        <a href="#blogs" class="bg-white text-indigo-600 font-semibold py-3 px-6 rounded-full hover:bg-gray-100 transition">Explore Articles</a>
      </div>
    </section>

    <!-- Featured Blogs -->
    <section id="blogs" class="py-16 px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Latest Posts</h3>
      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
        <!-- Blog Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/600x400/?technology" alt="blog" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold mb-2">The Future of Web Development</h4>
            <p class="text-gray-600 mb-4">Discover the new frameworks and tools shaping the next generation of websites and applications.</p>
            <a href="#" class="text-indigo-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/600x400/?design" alt="blog" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold mb-2">Design Thinking for Beginners</h4>
            <p class="text-gray-600 mb-4">Learn how to approach problem-solving creatively and bring innovation into your workflow.</p>
            <a href="#" class="text-indigo-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/600x400/?lifestyle" alt="blog" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold mb-2">Balancing Work and Life</h4>
            <p class="text-gray-600 mb-4">Discover strategies for staying productive without sacrificing your mental and emotional well-being.</p>
            <a href="#" class="text-indigo-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

      </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-indigo-600 text-white py-16 text-center">
      <h3 class="text-3xl font-bold mb-4">Join Our Community</h3>
      <p class="mb-6">Get the latest posts delivered right to your inbox every week.</p>
      <form class="max-w-md mx-auto flex flex-col sm:flex-row items-center gap-4">
        <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-3 rounded-full text-gray-800 focus:outline-none" required>
        <button class="bg-white text-indigo-600 font-semibold py-3 px-6 rounded-full hover:bg-gray-100 transition">Subscribe</button>
      </form>
    </section>

@endsection

  