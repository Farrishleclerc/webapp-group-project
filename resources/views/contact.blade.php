<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us  FitPlex</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 font-sans">

  <!-- Navbar -->
  <nav class="bg-yellow-200 flex justify-between items-center px-8 py-4">
    <div class="flex items-center space-x-2">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Example.jpg/50px-Example.jpg" alt="Logo" class="w-10 h-10 rounded-full">
      <span class="text-xl font-bold">FitPlex</span>
    </div>
    <div class="flex items-center space-x-6 text-gray-800 font-medium">
      <a href="{{ url('/') }}" class="hover:underline">Home</a>
      <a href="#" class="hover:underline">Booking</a>
      <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
    </div>
  </nav>

  <!-- Contact Section -->
  <div class="max-w-3xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
    <form action="#" method="POST" class="bg-white rounded-xl shadow-md p-8 space-y-6">
      @csrf
      <div>
        <label for="name" class="block text-sm font-semibold mb-2">Your Name</label>
        <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300" required>
      </div>
      <div>
        <label for="email" class="block text-sm font-semibold mb-2">Your Email</label>
        <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300" required>
      </div>
      <div>
        <label for="message" class="block text-sm font-semibold mb-2">Message</label>
        <textarea name="message" id="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-full shadow-md">
          Send Message
        </button>
      </div>
    </form>
  </div>

</body>
</html>
