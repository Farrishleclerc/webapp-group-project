<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'FitPlex Admin Panel')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

<!-- Admin Navbar -->
<nav class="bg-gray-800 text-white px-8 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('assets/img/logo.png') }}" alt="FitPlex Logo" class="h-8 w-auto">
        <span class="text-xl font-semibold">FitPlex Admin</span>
    </div>

    <div class="flex items-center space-x-6 text-white font-medium">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-yellow-300">Dashboard</a>
        <a href="{{ route('admin.users.indexadmin') }}" class="hover:text-yellow-300">Users</a>
        <a href="{{ route('admin.contacts.index') }}" class="hover:text-yellow-300">Messages</a>

        <!-- Logout -->
        <form action="{{ route('admin.logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm font-semibold">Logout</button>
        </form>
    </div>
</nav>

<!-- Page Content -->
<main class="p-8">
    @yield('content')
</main>

</body>
</html>
