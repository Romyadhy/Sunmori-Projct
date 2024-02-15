<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Login</h2>

        @if (session('success'))
            <div class="text-green-500 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="text-red-500 mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
            <input type="email" name="email" class="w-full mt-1 p-2 border rounded-md" required>
            <br>

            <label for="password" class="block text-sm font-medium text-gray-600 mt-2">Password:</label>
            <input type="password" name="password" class="w-full mt-1 p-2 border rounded-md" required>
            <br>

            <button type="submit" class="w-full mt-4 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Login</button>
        </form>

        <p class="mt-4 text-gray-600">Don't have an account? <a href="{{ route('auth.register') }}" class="text-blue-500">Register here</a></p>
    </div>

</body>
</html>
