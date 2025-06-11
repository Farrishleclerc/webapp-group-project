

@extends('layouts.adminlayout')

@section('content')
<div class="relative bg-cover bg-center min-h-[80vh] rounded-xl p-8" style="background-image: url('{{ asset('assets/img/admin-bg.jpg') }}');">
    <div class="bg-white/90 rounded-xl p-6 shadow-lg max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Admin Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- User Stats -->
            <div class="bg-yellow-100 border-l-4 border-yellow-500 p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-yellow-800">Total Users</h2>
                <p class="text-3xl font-bold">{{ $userCount }}</p>
                <p class="text-sm text-yellow-700">{{ $userPercentage }}% of expected capacity</p>
            </div>

            <!-- Contact Stats -->
            <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-blue-800">Contact Messages</h2>
                <p class="text-3xl font-bold">{{ $contactCount }}</p>
                <p class="text-sm text-blue-700">{{ $contactPercentage }}% of engagement target</p>
            </div>
        </div>

        <div class="mt-8 space-y-4">
            <a href="{{ route('admin.users.indexadmin') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Manage Users
            </a>

            <a href="{{ route('admin.contacts.index') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Manage Contact Messages
            </a>

            <a href="{{ route('admin.bookings.index') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Manage Bookings
            </a>
        </div>
    </div>
</div>
@endsection
