<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking - FitPlex</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-yellow-200 flex justify-between items-center px-8 py-4">
    <div class="flex items-center space-x-2">
        <!-- Logo -->
        <img src="/assets/img/logo.png" alt="FitPlex Logo" class="h-10 w-auto">
        <span class="text-xl font-bold">FitPlex</span>
    </div>

    <!-- Navigation Links - Moved outside the logo div -->
    <div class="flex items-center space-x-6 text-gray-800 font-medium">
      <a href="{{ route('home') }}" class="hover:underline">Home</a>
      <a href="#" class="hover:underline">Booking</a>
      <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
     <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
</nav>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-indigo-700 mb-2">FitPlex</h1>
            <h2 class="text-2xl text-gray-600">Log in and grab our package!</h2>
        </div>

        <div class="flex flex-col md:flex-row justify-center gap-8">
            <!-- Package A -->
            <div class="package-card bg-white rounded-lg shadow-md overflow-hidden w-full md:w-96">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-600 mb-4">Package A</h3>
                    <div class="space-y-2 text-gray-700">
                        <p class="font-semibold">FUTSAL</p>
                        <p>Mahallah Salahuddin Al-Ayyubi</p>
                        <p>International Islamic University Malaysia</p>
                        <p>Gombak, Kuala Lumpur.</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-2xl font-bold text-indigo-600 mb-4">3 Days for RM30</p>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                            Proceed
                        </button>
                    </div>
                </div>
            </div>

            <!-- Package B -->
            <div class="package-card bg-white rounded-lg shadow-md overflow-hidden w-full md:w-96">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-indigo-600 mb-4">Package B</h3>
                    <div class="space-y-2 text-gray-700">
                        <p class="font-semibold">FUTSAL</p>
                        <p>Mahallah Zubair Al-Awwam</p>
                        <p>International Islamic University Malaysia</p>
                        <p>Gombak, Kuala Lumpur.</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-2xl font-bold text-indigo-600 mb-4">3 Days for RM25</p>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                            Proceed
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

