<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Document</title>
    
</head>
<body>
    
    <div class="navbar">
        
        <img src="{{ asset('image/codin.png') }}" alt="Contoh Gambar">
                <div class="dropdown">
                    <a href=""></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>


    </div>

    <div class="banner">
            <img src="{{ asset('image/Banner-Image.png') }}" alt="">
    </div>

    <div class="products-container">
        @foreach($products as $index => $product)
        <div class="product-card">
            <img src="{{ asset('images/' . $product->image_path) }}" alt="{{ $product->title }}">
            <h3>{{ $product->title }}</h3>
            <p>{{ $product->description }}</p>
            <button class="btn" href="">Kunjungi</button>
        </div>
        @if(($index + 1) % 4 == 0)
            </div><div class="row">
        @endif
        @endforeach
    </div>
</body>
</html>