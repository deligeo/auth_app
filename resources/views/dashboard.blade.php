<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Welcome, {{ auth()->user()->name }}</h2>

    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-danger mt-3">Logout</button>
    </form>
</div>

</body>
</html>
