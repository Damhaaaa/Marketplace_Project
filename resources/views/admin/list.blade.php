<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <title>Admin Product List</title>
</head>
<body>
    <div class="navbar">
        
        <img src="{{ asset('image/codin.png') }}" alt="Contoh Gambar">
        <a href="{{ route('admin.users.index') }}">Manage User</a>
        <a href="{{ route('admin.create') }}">Add Products</a>
    </div>
    <ul>
        @foreach ($products as $product)
        <table>
            <tr>
                <th>Products Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td><img src="{{ asset('images/' . $product->image_path) }}" alt="{{ $product->title }}"></td>
                <td>
                    <div class="action-table">
                        <a href="{{ route('admin.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('admin.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
        @endforeach
    </ul>
</body>
</html>
