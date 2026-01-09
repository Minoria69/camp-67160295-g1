<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Pokemon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h1>Add New Pokemon</h1>
    <a href="{{ url('/pokedexs') }}" class="btn btn-secondary mb-3">Back to List</a>

    <form action="{{ url('/pokedexs') }}" method="POST">
        @csrf {{-- จำเป็นต้องมีเพื่อความปลอดภัยของ Laravel --}}

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Type:</label>
            <input type="text" name="type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Species:</label>
            <input type="text" name="species" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Height:</label>
            <input type="text" name="height" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Weight:</label>
            <input type="text" name="weight" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>HP:</label>
            <input type="number" name="hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Attack:</label>
            <input type="number" name="attack" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Defense:</label>
            <input type="number" name="defense" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Image URL:</label>
            <input type="text" name="image_url" class="form-control" placeholder="https://..." required>
        </div>

        <button type="submit" class="btn btn-success">Save Pokemon</button>
    </form>

</body>
</html>
