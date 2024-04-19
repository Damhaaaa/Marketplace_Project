<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }



    /**
     * Menampilkan formulir untuk membuat produk baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Menyimpan produk yang baru dibuat ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imageName,
        ]);

        return redirect()->route('admin.create')->with('success','Product created successfully.');
    }

    /**
     * Menampilkan formulir untuk mengedit produk.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    /**
     * Mengupdate produk dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.list')->with('success', 'Product updated successfully');
    }

    /**
     * Menghapus produk dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.list')->with('success', 'Product deleted successfully');
    }

    public function showAdminList()
    {
        $products = Product::all(); // Ambil semua data produk dari database
        return view('admin.list', compact('products')); // Kirim data produk ke view list.blade.php di dalam folder admin
    }


}


