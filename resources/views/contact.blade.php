@extends('master.layout')

@section('title', 'Contact Us - FitPlex')

@section('content')
  <!-- Success/Error Messages -->
  @if(session('status'))
    <div class="{{ session('status') === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700' }} border px-4 py-3 rounded relative text-center mb-4" role="alert">
      {{ session('status') === 'success' ? 'Thank you! Your message has been sent successfully.' : 'There was an error submitting your form. Please try again.' }}
    </div>
  @endif

  @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
      <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Hero Background -->
  <div class="relative bg-cover bg-center min-h-[80vh]" style="background-image: url('{{ asset('assets/img/445502507_10232068262519710_7962354722553515553_n-1024x684.jpg') }}');">
    <div class="absolute inset-0 bg-yellow-100/80 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-4xl font-extrabold italic mb-2">Contact Us!</h1>
      <p class="mb-6 text-gray-700">Follow us for more updates!</p>

      <!-- Form -->
      <form action="{{ route('contact.store') }}" method="POST" class="w-full max-w-xl space-y-4">
        @csrf

        <!-- Name Field -->
        <div>
          <input type="text" name="name" placeholder="Name"
                 class="w-full px-4 py-2 rounded-md border border-gray-300 @error('name') border-red-500 @enderror"
                 value="{{ old('name') }}" required>
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Matric and Email Fields -->
        <div class="flex flex-col md:flex-row gap-4">
          <div class="w-full md:w-1/2">
            <input type="text" name="matric" placeholder="Matric No"
                   class="w-full px-4 py-2 rounded-md border border-gray-300 @error('matric') border-red-500 @enderror"
                   value="{{ old('matric') }}" required>
            @error('matric')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="w-full md:w-1/2">
            <input type="email" name="email" placeholder="Email"
                   class="w-full px-4 py-2 rounded-md border border-gray-300 @error('email') border-red-500 @enderror"
                   value="{{ old('email') }}" required>
            @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Message Field -->
        <div>
          <textarea name="message" rows="5" placeholder="Message"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 @error('message') border-red-500 @enderror"
                    required>{{ old('message') }}</textarea>
          @error('message')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 px-6 py-2 rounded-full font-semibold text-gray-800 shadow transition duration-300">
          Submit
        </button>
      </form>
    </div>
  </div>

  <!-- Footer / Contact Icons -->
  <div class="bg-yellow-300 py-8 text-center">
    <h2 class="text-2xl font-semibold mb-4">How to find us?</h2>
    <div class="flex justify-center gap-6 flex-wrap">
      <a href="mailto:fitplex@gmail.com" class="flex flex-col items-center hover:scale-105 transition-transform">
        <img src="https://img.icons8.com/ios-glyphs/48/000000/gmail.png" class="w-10 h-10" alt="Email icon">
        <span>Email us</span>
      </a>
      <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center hover:scale-105 transition-transform">
        <img src="https://img.icons8.com/ios-filled/48/000000/facebook--v1.png" class="w-10 h-10" alt="Facebook icon">
        <span>Facebook</span>
      </a>
      <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center hover:scale-105 transition-transform">
        <img src="https://img.icons8.com/ios-filled/48/000000/tiktok--v1.png" class="w-10 h-10" alt="TikTok icon">
        <span>TikTok</span>
      </a>
      <a href="tel:+60123456789" class="flex flex-col items-center hover:scale-105 transition-transform">
        <img src="https://img.icons8.com/ios-filled/48/000000/phone.png" class="w-10 h-10" alt="Phone icon">
        <span>Call us</span>
      </a>
      <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center hover:scale-105 transition-transform">
        <img src="https://img.icons8.com/ios-filled/48/000000/instagram-new.png" class="w-10 h-10" alt="Instagram icon">
        <span>Instagram</span>
      </a>
    </div>
  </div>
@endsection
