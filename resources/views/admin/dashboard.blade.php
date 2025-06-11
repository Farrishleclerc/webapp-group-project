

@extends('layouts.adminlayout')

@section('content')
<div class="bg-gray-100 min-h-screen py-12 px-4">
    <div class="max-w-6xl mx-auto space-y-10">

        <!-- Dashboard Header -->
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2">Admin Dashboard</h1>
            <p class="text-gray-500 text-lg">Overview of FitPlex system usage</p>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-400">
                <h2 class="text-lg font-semibold text-gray-600">Total Users</h2>
                <p class="text-3xl font-bold text-yellow-600">{{ $userCount }}</p>
                <p class="text-sm text-gray-500">{{ $userPercentage }}% of target reached</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-400">
                <h2 class="text-lg font-semibold text-gray-600">Contact Messages</h2>
                <p class="text-3xl font-bold text-blue-600">{{ $contactCount }}</p>
                <p class="text-sm text-gray-500">{{ $contactPercentage }}% of target reached</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-400">
                <h2 class="text-lg font-semibold text-gray-600">Bookings</h2>
                <p class="text-3xl font-bold text-green-600">{{ $bookingCount ?? 0 }}</p>
                <p class="text-sm text-gray-500">{{ $bookingPercentage ?? 0 }}% booking rate</p>
            </div>
        </div>

       <!-- Charts Section: Pie and Bar side by side -->
<div class="bg-white rounded-xl shadow p-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">Statistics Overview</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">

        <!-- Pie Chart -->
        <div class="flex justify-center">
            <div style="width: 350px; height: 350px;">
                <canvas id="adminPieChart"></canvas>
            </div>
        </div>

        <!-- Bar Chart -->
        <div class="flex justify-center">
            <div style="width: 350px; height: 350px;">
                <canvas id="contactBarChart"></canvas>
            </div>
        </div>
    </div>
</div>

       <!-- Modern Action Buttons -->
<div class="flex flex-wrap justify-center gap-6 mt-8">
    <a href="{{ route('admin.users.indexadmin') }}"
       class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-xl shadow-md hover:from-blue-600 hover:to-indigo-700 transform hover:scale-105 transition duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 100-8 4 4 0 000 8z" />
        </svg>
        Manage Users
    </a>

    <a href="{{ route('admin.contacts.index') }}"
       class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-600 text-white font-semibold rounded-xl shadow-md hover:from-pink-600 hover:to-rose-700 transform hover:scale-105 transition duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        Manage Contacts
    </a>

    <a href="{{ route('admin.bookings.index') }}"
       class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-md hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z" />
        </svg>
        Manage Bookings
    </a>
</div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const pieCtx = document.getElementById('adminPieChart').getContext('2d');
    const barCtx = document.getElementById('contactBarChart').getContext('2d');

    // Pie Chart: Users vs Bookings
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Users', 'Bookings'],
            datasets: [{
                label: 'Usage Distribution',
                data: [{{ $userPercentage }}, {{ $bookingPercentage ?? 100 - $userPercentage }}],
                backgroundColor: ['#facc15', '#34d399'],
                borderColor: ['#eab308', '#059669'],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // Bar Chart: Contact Percentage
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Contact Messages'],
            datasets: [{
                label: 'Contact Engagement (%)',
                data: [{{ $contactPercentage }}],
                backgroundColor: '#3b82f6',
                borderColor: '#1d4ed8',
                borderWidth: 1,
                borderRadius: 8,
                barThickness: 50
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        callback: value => value + '%'
                    }
                }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });
</script>
@endsection
