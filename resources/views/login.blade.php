<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl">
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold mb-6">Sign In</h2>
            <form>
                <div class="mb-4">
                    <input type="text" placeholder="Username" class="w-full p-3 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-user absolute right-3 top-3 text-gray-400"></i>
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" class="w-full p-3 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-envelope absolute right-3 top-3 text-gray-400"></i>
                </div>
                <div class="mb-4">
                    <input type="password" placeholder="Password" class="w-full p-3 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-lock absolute right-3 top-3 text-gray-400"></i>
                </div>
                <button class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">Register</button>
            </form>
        </div>
        <div class="bg-blue-500 text-white p-8 md:w-1/2 rounded-b-lg md:rounded-r-lg md:rounded-bl-none flex flex-col items-center justify-center">
            <h2 class="text-2xl font-bold mb-2">Welcome Back!</h2>
            <p class="mb-6">Already have an account?</p>
            <a href="{{ url('register') }}">
                <button class="bg-white text-blue-500 p-3 rounded-lg font-semibold hover:bg-gray-100">
                    Sign Up
                </button>
            </a>
        </div>
    </div>
</body>
</html>