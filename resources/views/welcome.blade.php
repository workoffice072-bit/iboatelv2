<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

        <!-- Logo / Title -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Welcome Back</h1>
            <p class="text-gray-500 mt-2">Login to your account</p>
        </div>

        <!-- Form -->
        <form  method="POST" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                </label>
                <input 
                    type="email" 
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input 
                    type="password" 
                    name="password"
                    placeholder="Enter password"
                    class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>

                <a href="#" class="text-blue-600 hover:underline">
                    Forgot Password?
                </a>
            </div>

            <!-- Button -->
            <button 
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl font-semibold transition"
            >
                Login
            </button>
        </form>

        <!-- Register -->
        <p class="text-center text-sm text-gray-500 mt-6">
            Don't have an account?
            <a href="#" class="text-blue-600 font-medium hover:underline">
                Register
            </a>
        </p>

    </div>

</body>
</html>