<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Order Details</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Order Details</h1>
        <div class="mb-2">
            <p class="text-gray-600 font-medium">Order ID:</p>
            <p class="text-gray-800">{{ $order->id }}</p>
        </div>
        <div class="mb-2">
            <p class="text-gray-600 font-medium">Name:</p>
            <p class="text-gray-800">{{ $order->name }}</p>
        </div>
        <div class="mb-2">
            <p class="text-gray-600 font-medium">Total:</p>
            <p class="text-gray-800 text-lg font-semibold">${{ number_format($order->total, 2) }}</p>
        </div>
        <!-- Add more details as needed -->
        <div class="mt-6">
            <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                Back to Home
            </a>
        </div>
    </div>
</body>
</html>
