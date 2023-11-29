<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display the list of products in mosaic form
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Display the details of a specific product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show the form for editing a specific product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $product->update([
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            // Add other fields as needed
        ]);

        // Handle images update if necessary

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'image1' => 'required|max:255',
            'image2' => 'required|max:255',
        ]);
    
        $product = Product::create([
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image1' => $validatedData['image1'],
            'image2' => $validatedData['image2'],
        ]);
    
        // Handle images upload if necessary
    
        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }
    
    // Show the confirmation dialog for deleting a product
    public function confirmDelete($id)
    {
        $product = Product::findOrFail($id);
        return view('products.confirm-delete', compact('product'));
    }

    // Remove the specified product from storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}