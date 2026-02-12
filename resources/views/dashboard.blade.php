<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Lora -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lora', serif;
            background-color: #ffffff; /* white body background */
            min-height: 100vh;
        }

        .navbar-gradient {
            background: linear-gradient(90deg, #6f42c1, #ffc107); /* navbar gradient */
        }

        .card {
            background: rgba(255, 255, 255, 0.9); /* semi-transparent white card */
            border-radius: 0.75rem;
        }

        .navbar-brand, .btn-logout {
            font-weight: 600;
        }
    </style>
</head>
<body>

<!-- Navbar with gradient -->
<nav class="navbar navbar-expand-lg navbar-gradient shadow-sm">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Dashboard</a>
        <div class="ms-auto">
            <form method="POST" action="/logout">
                @csrf
                <button class="btn btn-light text-dark btn-logout">Logout</button>
            </form>
        </div>
    </div>
</nav>

<!-- Main content -->
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card p-4 shadow">
            <h2>Welcome, {{ auth()->user()->name }}</h2>
            <p class="mt-3">You are logged in successfully!</p>
        </div>
    </div>
</div>

</body>
</html>
