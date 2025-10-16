@extends('frontend.layout')
@section(section: 'content')

 

    <!-- Header -->
    <section class="text-center py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
      <h2 class="text-4xl font-extrabold mb-2">Get in Touch</h2>
      <p class="text-lg">We’d love to hear from you!</p>
    </section>

    <!-- Contact Form -->
    <section class="py-16 px-6 max-w-4xl mx-auto">
      <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
        <h3 class="text-2xl font-bold text-center mb-8 text-indigo-600">Send Us a Message</h3>
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label class="block text-gray-700 mb-2">Full Name</label>
            <input type="text" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your name" required>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Email Address</label>
            <input type="email" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your email" required>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Message</label>
            <textarea rows="5" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Write your message" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="bg-indigo-600 text-white font-semibold py-3 px-8 rounded-full hover:bg-indigo-700 transition">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- Contact Info -->
    <section class="py-12 bg-gray-100 text-center">
      <h4 class="text-xl font-semibold text-gray-700 mb-4">Other Ways to Reach Us</h4>
      <p class="text-gray-600 mb-2">📧 Email: <a href="mailto:support@novablog.com" class="text-indigo-600 hover:underline">support@novablog.com</a></p>
      <p class="text-gray-600">📍 Location: Nairobi, Kenya</p>
      
        </section>

    

    @endsection