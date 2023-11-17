<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //Validate Product inputs
        $validated = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "main_photo" => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_one"  => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_two"  => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_three"  => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_four"  => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "price"  => "required|string",
            "compare_at_price"  => "required|string",
            "stock"  => "required|string",
            "sku"  => "required|string",
            "status"  => "required|string",
        ]);

        //Moving images to the public folder
        //Main Photo image
        $New_main_photo = time() . '-' . $request->file('main_photo')->getClientOriginalName();
        $sizeMainPhoto = $request->file('main_photo')->getSize();
        $nameMainPhoto = $New_main_photo;
        $request->file('main_photo')->move(public_path('images'), $nameMainPhoto);

        //photo_one
        $newPhotoOne = time() . '-' . $request->file('photo_one')->getClientOriginalName();
        $sizePhotoOne = $request->file('photo_one')->getSize();
        $namePhotoOne = $newPhotoOne;
        $request->file('photo_one')->move(public_path('images'), $namePhotoOne);
        // "photo_two"
        $newPhotoTwo = time() . '-' . $request->file('photo_two')->getClientOriginalName();
        $sizePhotoTwo = $request->file('photo_two')->getSize();
        $namePhotoTwo = $newPhotoTwo;
        $request->file('photo_two')->move(public_path('images'), $namePhotoTwo);
        // "photo_three"
        $newPhotoThree = time() . '-' . $request->file('photo_three')->getClientOriginalName();
        $sizePhotoThree = $request->file('photo_three')->getSize();
        $namePhotoThree = $newPhotoThree;
        $request->file('photo_three')->move(public_path('images'), $namePhotoThree);
        // "photo_three"
        $newPhotoFour = time() . '-' . $request->file('photo_three')->getClientOriginalName();
        $sizePhotoFour = $request->file('photo_four')->getSize();
        $namePhotoFour = $newPhotoFour;
        $request->file('photo_three')->move(public_path('images'), $namePhotoFour);

        // Calling Product Model
        $product = new Product;

        $product->product_title = $request->title;
        $product->product_description = $request->description;
        $product->product_main_photo =  $nameMainPhoto;
        $product->product_photo_1 =  $namePhotoOne;
        $product->product_photo_2 =  $namePhotoTwo;
        $product->product_photo_3 =  $namePhotoThree; 
        $product->product_photo_4 =  $namePhotoFour; 
        $product->product_price = $request->price;
        $product->product_compare_at_price = $request->compare_at_price; 
        $product->product_stock = $request->stock; 
        $product->SKU = $request->sku;
        $product->product_status = $request->status;
        $product->product_gender = $request->product_gender;
        $product->product_type = $request->product_type;
        $product->product_collection = $request->collections;
        $product->product_tags = $request->tags;
        $product->product_brand = $request->brand;
        $product->product_case = $request->case;
        $product->product_mouvement = $request->movement;
        $product->product_material = $request->material;        

        $product->save();
        session()->flash('success', "The product has been created successfully!"); 
        return redirect('product.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}