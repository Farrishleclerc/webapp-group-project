<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitPlex </title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 font-sans">

  <!-- Navbar -->
  <nav class="bg-yellow-200 flex justify-between items-center px-8 py-4">
    <div class="flex items-center space-x-2">
        <!-- Logo -->
        <img src="/assets/img/logo.png" alt="FitPlex Logo" class="h-10 w-auto">
        <span class="text-xl font-bold">FitPlex</span>
    </div>

    <!-- Navigation Links - Moved outside the logo div -->
    <div class="flex items-center space-x-6 text-gray-800 font-medium">
      <a href="#" class="hover:underline">Home</a>
      <a href="{{ route('booking') }}">Booking</a>
      <a href="{{ route('contact') }}">Contact</a>
      <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
</nav>

  <!-- Hero Section -->
  <div class="max-w-4xl mx-auto px-6 py-12 text-center">
    <h1 class="text-4xl font-extrabold italic mb-6">YOUR SPORT HAVEN !</h1>
    <img src="{{ asset('assets/img/445502507_10232068262519710_7962354722553515553_n-1024x684.jpg') }}"
         alt="FitPlex main logo"
         class="rounded-3xl mx-auto w-full max-h-[500px] object-cover mb-6">
    <p class="text-gray-700 text-base max-w-2xl mx-auto mb-6">
      Get ready to elevate your game. FitPlex is your go-to platform for hassle-free sport facility bookings.
      With easy access and efficient management, you can focus on what you love the most: playing your favorite sports.
    </p>
    <button class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-semibold px-6 py-2 rounded-full shadow-md">
      Get Started
    </button>
</div>

</body>
</html>
