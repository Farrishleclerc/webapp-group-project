<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - FitPlex</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-yellow-300 flex justify-between items-center px-8 py-4 shadow-md">
    <div class="flex items-center space-x-2">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Example.jpg/50px-Example.jpg" alt="Logo" class="w-10 h-10 rounded-full">
      <span class="text-xl font-bold">FitPlex</span>
    </div>
    <div class="flex items-center space-x-6 text-gray-900 font-medium">
      <a href="/" class="hover:underline">Home</a>
      <a href="/booking" class="hover:underline">Booking</a>
      <a href="/contact" class="underline font-bold">Contact</a>
      <a href="/login">
        <button class="bg-white text-black px-4 py-1 rounded-full font-semibold hover:bg-gray-100">Log In</button>
      </a>
    </div>
  </nav>

  <!-- Hero Background -->
  <div class="relative bg-cover bg-center min-h-[80vh]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/28/UTC_Interior_Gym_Track.jpg');">
    <div class="absolute inset-0 bg-yellow-100/80 flex flex-col items-center justify-center text-center px-4">

      <h1 class="text-4xl font-extrabold italic mb-2">Contact Us!</h1>
      <p class="mb-6 text-gray-700">Follow us for more updates!</p>

      <!-- Form -->
      <form action="#" method="POST" class="w-full max-w-xl space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Name :" class="w-full px-4 py-2 rounded-md border border-gray-300">

        <div class="flex space-x-4">
          <input type="text" name="matric" placeholder="Matric No :" class="w-1/2 px-4 py-2 rounded-md border border-gray-300">
          <input type="email" name="email" placeholder="Email :" class="w-1/2 px-4 py-2 rounded-md border border-gray-300">
        </div>

        <textarea name="message" rows="5" placeholder="Message :" class="w-full px-4 py-2 rounded-md border border-gray-300"></textarea>

        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 px-6 py-2 rounded-full font-semibold text-gray-800 shadow">
          Submit
        </button>
      </form>
    </div>
  </div>

  <!-- Footer / Contact Icons -->
  <div class="bg-yellow-300 py-8 text-center">
    <h2 class="text-2xl font-semibold mb-4">How to find us?</h2>
    <div class="flex justify-center gap-6 flex-wrap">
      <a href="mailto:fitplex@gmail.com" class="flex flex-col items-center">
        <img src="https://img.icons8.com/ios-glyphs/48/000000/gmail.png" class="w-10 h-10">
        <span>Email us</span>
      </a>
      <a href="https://www.facebook.com" class="flex flex-col items-center">
        <img src="https://img.icons8.com/ios-filled/48/000000/facebook--v1.png" class="w-10 h-10">
        <span>Facebook</span>
      </a>
      <a href="https://www.tiktok.com" class="flex flex-col items-center">
        <img src="https://img.icons8.com/ios-filled/48/000000/tiktok--v1.png" class="w-10 h-10">
        <span>Tiktok</span>
      </a>
      <a href="tel:+60123456789" class="flex flex-col items-center">
        <img src="https://img.icons8.com/ios-filled/48/000000/phone.png" class="w-10 h-10">
        <span>Call us</span>
      </a>
      <a href="https://www.instagram.com" class="flex flex-col items-center">
        <img src="https://img.icons8.com/ios-filled/48/000000/instagram-new.png" class="w-10 h-10">
        <span>Instagram</span>
      </a>
    </div>
  </div>

</body>
</html>

