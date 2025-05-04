<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $this->validateData($request);

        Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $this->validateData($request);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product updated successfully!');
    }

    public function delete(Product $product) {
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product deleted successfully!');
    }

    private function validateData(Request $request) {
        return $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2', # Min 0, Max 2
            'quantity' => 'required|numeric',
            'description' => 'nullable',
        ]);
    }
}
