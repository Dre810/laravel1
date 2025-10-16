<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nova Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <h1 class="text-2xl font-bold text-indigo-600">NovaBlog</h1>
        <nav class="space-x-6 hidden md:flex">
          <a href="/home" class="hover:text-indigo-600">Home</a>
          <a href="/about" class="hover:text-indigo-600">About</a>
          <a href="/categories" class="hover:text-indigo-600">Categories</a>
          <a href="/contacts" class="hover:text-indigo-600">Contact</a>
        </nav>
        <button class="md:hidden text-2xl">&#9776;</button>
      </div>
    </header>

    <!-- Main Content -->
    @yield(section: 'content')
       <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center py-6">
      <p>&copy; 2025 NovaBlog. All rights reserved.</p>
    </footer>

  </body>
</html>
