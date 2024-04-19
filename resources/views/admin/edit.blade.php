<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
</head>
<body>
<form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $product->title }}">
    <textarea name="description" placeholder="Description">{{ $product->description }}</textarea>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Update Product</button>
</form>
</body>
</html>
