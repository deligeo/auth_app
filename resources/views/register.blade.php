<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded shadow-md w-96">
    <h2 class="text-2xl font-bold text-center mb-4">Register</h2>

    @if(session('error'))
        <div class="bg-red-200 text-red-800 p-2 mb-2 rounded">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Name" class="w-full mb-3 p-2 border rounded">
        <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">
        <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Register</button>
    </form>

    <p class="text-center mt-4"><a href="/login" class="text-blue-500">Already have an account?</a></p>
</div>
</body>
</html>
