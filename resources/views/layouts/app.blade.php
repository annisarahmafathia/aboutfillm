<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AboutFilm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #1a1a2e; color: #eee; }
        .navbar { background-color: #16213e !important; }
        .card { background-color: #16213e; border: none; transition: transform 0.2s; }
        .card:hover { transform: scale(1.03); }
        .badge-genre { background-color: #e94560; }
        .rating { color: #f5c518; font-weight: bold; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark px-4 py-3 mb-4">
    <a class="navbar-brand fw-bold fs-4" href="/">🎬 AboutFilm</a>
    <div class="d-flex gap-3">
        <a href="/" class="text-white text-decoration-none">Films</a>
        <a href="{{ route('reviews.index') }}" class="text-white text-decoration-none">Reviews</a>
        <a href="{{ route('reviews.create') }}" class="btn btn-danger btn-sm"> 📝Tulis Review</a>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>