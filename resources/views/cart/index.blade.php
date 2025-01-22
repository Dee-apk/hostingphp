<div class="min-h-screen bg-gray-100 py-10">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Shopping Cart</h1>
        
        @if ($cartItems->isNotEmpty())
            <!-- Cart Items -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="space-y-4">
                    @foreach ($cartItems as $item)
                        <div class="flex items-center border-b pb-4">
                            <!-- Product Image -->
                            <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-24 h-24 rounded object-cover">
                            <!-- Product Info -->
                            <div class="ml-4 flex-1">
                                <h4 class="text-lg font-semibold text-gray-800">{{ $item->product->name }}</h4>
                                <p class="text-sm text-gray-600">Price: ${{ $item->product->price }}</p>
                                <form method="POST" action="{{ route('cart.update', $item->id) }}" class="mt-2">
                                    @csrf
                                    @method('PATCH')
                                    <div class="flex items-center space-x-2">
                                        <button type="submit" name="action" value="decrease" class="px-2 py-1 bg-gray-200 rounded">-</button>
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" readonly class="w-12 text-center border rounded">
                                        <button type="submit" name="action" value="increase" class="px-2 py-1 bg-gray-200 rounded">+</button>
                                    </div>
                                    <div><span id="cart-count" class="">{{ $cartCount }}</span></div>
                                </form>
                            </div>
                            <!-- Remove Button -->
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-auto text-red-500 hover:text-red-700">
                                    Remove
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <!-- Summary -->
                <div class="mt-6 border-t pt-6">
                    <p class="text-lg font-semibold text-gray-800">
                        Total: ${{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}
                    </p>
                </div>
            </div>

            <!-- Proceed to Checkout -->
            <a href="{{ route('cart.checkout') }}" class="mt-6 inline-block w-full bg-green-600 text-white text-center px-4 py-2 rounded-lg shadow-md hover:bg-green-700">
                Proceed to Checkout
            </a>
        @else
            <!-- Empty Cart -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Your cart is empty.</h2>
                <p class="text-gray-600 mt-2">Add items to your cart to see them here.</p>
                <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
                    Go to Home
                </a>
            </div>
        @endif
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>


<script src="https://cdn.tailwindcss.com"></script>
