<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <nav class="bg-white border-b shadow-sm w-full">
    <div class="flex items-center justify-between p-4">
      <!-- Menu Links (Left) -->
      <div class="flex space-x-6">
        <a href="/" class="text-gray-700 hover:text-blue-600 font-bold">Home</a>
        <a href="/orders" class="text-gray-700 hover:text-blue-600 font-bold">Orders</a>
        <a href="/cart" class="relative text-gray-700 hover:text-blue-600 font-bold flex items-center">
          Cart
          <span id="cart-count" class="absolute -top-2 -right-3 bg-red-500 text-white text-xs rounded-full px-2 py-0.5">{{ $cartCount }}</span>
        </a>
      </div>

      <!-- Logo (Center) -->
      <a href="/" class="flex items-center mx-auto">
        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-6">
      </a>

      <!-- Login/Register or Logout (Right) -->
      <div class="flex space-x-6">
        @if (Auth::check())
        <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="text-gray-700 hover:text-blue-600 font-bold">Logout</button>
        </form>

        @else
          <a href="/register" class="text-gray-700 hover:text-blue-600 font-bold">Sign Up</a>
          <a href="/login" class="text-gray-700 hover:text-blue-600 font-bold">Login</a>
        @endif
      </div>
    </div>
  </nav>

  <script>
    // Toggle Menu for Mobile
    document.getElementById('hamburger').onclick = function() {
      document.getElementById('menu').classList.toggle('hidden');
    };
  </script>
</body>
</html>
