<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        
        <img src="{{ asset('images/codin.png') }}" alt="Contoh Gambar">
        
        <form action="{{ route('products.search') }}" method="GET">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

    </div>
</body>
</html>