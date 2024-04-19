<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>

    <div class="navbar">
        
        <img src="{{ asset('image/codin.png') }}" alt="Contoh Gambar">
        <a href="{{ route('admin.list') }}">Back</a>
    </div>

    <div class="create-data">
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title">
            <textarea name="description" placeholder="Description"></textarea>
            <input type="file" name="image" accept="image/*">
            <button type="submit">Add Product</button>
        </form>
    </div>

</body>
</html>