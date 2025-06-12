@extends('master.layout')

@section('title', 'Home - FitPlex')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12 text-center">
  <h1 class="text-4xl font-extrabold italic mb-6">YOUR SPORTS HAVEN !</h1>

  <img src="{{ asset('assets/img/445502507_10232068262519710_7962354722553515553_n-1024x684.jpg') }}"
       alt="FitPlex main logo"
       class="rounded-3xl mx-auto w-full max-h-[500px] object-cover mb-6">

  <p class="text-gray-700 text-base max-w-2xl mx-auto mb-6">
    Get ready to elevate your game. FitPlex is your go-to platform for hassle-free sport facility bookings.
    With easy access and efficient management, you can focus on what you love the most: playing your favorite sports.
  </p>


</div>
@endsection
