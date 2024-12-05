<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiment Analysis - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100">

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-semibold text-center mb-6">Welcome to Sentiment Analysis!</h1>
        
        <p class="text-lg text-center mb-4">Analyze the sentiment of your text and get detailed insights.</p>
        
        <div class="text-center mb-4">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md hover:bg-blue-600">Login</a>
        </div>
        
        <div class="text-center mb-4">
            <a href="{{ route('register') }}" class="bg-green-500 text-white py-3 px-6 rounded-md hover:bg-green-600">Register</a>
        </div>

        <div class="text-center">
            <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md hover:bg-blue-600">Go to Dashboard</a>
        </div>
    </div>

</body>
</html>
