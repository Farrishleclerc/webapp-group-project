<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'FitPlex')</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .package-card {
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    .package-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-size: cover;
      background-position: center;
      opacity: 0.3;
      z-index: 0;
    }
    .package-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .package-content {
      position: relative;
      z-index: 1;
    }
    .package-a::before {
      background-image: url('/assets/img/salahuddin-court.png');
    }
    .package-b::before {
      background-image: url('/assets/img/zubair-court.jpg');
    }
  </style>
</head>
<body class="bg-yellow-50 font-sans">

  <!-- Navbar -->
<nav class="bg-yellow-200 flex justify-between items-center px-8 py-4">
    <div class="flex items-center space-x-2">
        <!-- Logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="FitPlex Logo" class="h-10 w-auto">
        <span class="text-xl font-bold">FitPlex</span>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-6 text-gray-800 font-medium">
        <a href="{{ route('home') }}" class="hover:text-yellow-700">Home</a>

        <!-- Booking Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center hover:text-yellow-700">
                Booking
                <svg class="ml-1 w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
            </button>
            <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded shadow z-10">
                <a href="{{ route('booking') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-yellow-100">Package Booking</a>
                <a href="{{ route('single.booking') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-yellow-100">Single Booking</a>
            </div>
        </div>

        <a href="{{ route('contact') }}" class="hover:text-yellow-700">Contact</a>

        <!-- Auth Section -->
        @auth
            <!-- Logged In -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-semibold px-4 py-2 rounded shadow flex items-center">
                    {{ Auth::user()->name }}
                    <svg class="ml-2 w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
                </button>
                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-40 bg-white border border-gray-300 rounded shadow z-10">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-800 hover:bg-yellow-100">Logout</button>
                    </form>
                </div>
            </div>
        @else
            <!-- Not Logged In -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-semibold px-4 py-2 rounded shadow flex items-center">
                    Login
                    <svg class="ml-2 w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
                </button>
                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-40 bg-white border border-gray-300 rounded shadow z-10">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-yellow-100">User Login</a>
                    <a href="{{ route('admin.login') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-yellow-100">Admin Login</a>
                </div>
            </div>
        @endauth
    </div>
</nav>

  <!-- Page Content -->
  <main>
    @yield('content')
  </main>

</body>
</html>
