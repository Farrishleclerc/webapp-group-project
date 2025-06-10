@extends('master.layout')

@section('title', 'Booking - FitPlex')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-indigo-700 mb-2">FitPlex</h1>
    <h2 class="text-2xl text-gray-600">Log in and grab our package!</h2>
  </div>

  <div class="flex flex-col md:flex-row justify-center gap-8">
    <!-- Package A -->
    <div class="package-card package-a bg-white rounded-lg shadow-md overflow-hidden w-full md:w-96">
      <div class="p-6 package-content">
        <h3 class="text-xl font-bold text-indigo-600 mb-4">Package A</h3>
        <div class="space-y-2 text-gray-700">
          <p class="font-semibold">FUTSAL</p>
          <p>Mahallah Salahuddin Al-Ayyubi</p>
          <p>International Islamic University Malaysia</p>
          <p>Gombak, Kuala Lumpur.</p>
        </div>
        <div class="mt-6">
          <p class="text-2xl font-bold text-indigo-600 mb-4">3 Days for RM30</p>
<form method="GET" action="{{ route('package.booking', ['package' => 'A']) }}">
    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">
        Proceed
    </button>
</form>
        </div>
      </div>
    </div>

    <!-- Package B -->
    <div class="package-card package-b bg-white rounded-lg shadow-md overflow-hidden w-full md:w-96">
      <div class="p-6 package-content">
        <h3 class="text-xl font-bold text-indigo-600 mb-4">Package B</h3>
        <div class="space-y-2 text-gray-700">
          <p class="font-semibold">FUTSAL</p>
          <p>Mahallah Zubair Al-Awwam</p>
          <p>International Islamic University Malaysia</p>
          <p>Gombak, Kuala Lumpur.</p>
        </div>
        <div class="mt-6">
          <p class="text-2xl font-bold text-indigo-600 mb-4">3 Days for RM25</p>
<form method="GET" action="{{ route('package.booking', ['package' => 'B']) }}">
    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">
        Proceed
    </button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
