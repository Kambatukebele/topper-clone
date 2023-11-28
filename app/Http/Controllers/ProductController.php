<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use App\Models\ProductBrand;
use App\Models\ProductCase;
use App\Models\ProductCollection;
use App\Models\ProductGender;
use App\Models\ProductMaterial;
use App\Models\ProductMouvement;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::latest()->get();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = ProductGender::all();
        $brands = ProductBrand::all();
        $types = ProductType::all();
        $collections = ProductCollection::all();
        $cases = ProductCase::all();
        $mouvements = ProductMouvement::all();
        $materials = ProductMaterial::all();
        return view('admin.products.create', [
            'brands' => $brands,
            'genders' => $genders,
            'types' => $types,
            'collections' => $collections,
            'cases' => $cases,
            'mouvements' => $mouvements,
            'materials' => $materials,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate Product inputs
        $validated = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "main_photo" => "required|image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_one"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_two"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_three"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_four"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "price"  => "required|string",
            "compare_at_price"  => "required|string",
            "stock"  => "required|string",
            "status"  => "required|string",
           "product_brands_id" => "integer",
           "product_cases_id" => "integer",
           "product_mouvements_id" => "integer",
           "product_types_id" => "integer",
           "product_genders_id" => "integer",
           "product_collections_id" => "integer",
           "product_materials_id" => "integer",
        ]);

        //Moving images to the public folder
        //Main Photo image
        if($request->file('main_photo') === null){
            $nameMainPhoto = "";
        }else{
            $New_main_photo = time() . '-' . $request->file('main_photo')->getClientOriginalName();
            $sizeMainPhoto = $request->file('main_photo')->getSize();
            $nameMainPhoto = $New_main_photo;
            $request->file('main_photo')->move(public_path('assets/products/images'), $nameMainPhoto);
        }

        //photo_one
        if($request->file('photo_one') === null){
            $namePhotoOne = "";
        }else{
            $newPhotoOne = time() . '-' . $request->file('photo_one')->getClientOriginalName();
            $sizePhotoOne = $request->file('photo_one')->getSize();
            $namePhotoOne = $newPhotoOne;
            $request->file('photo_one')->move(public_path('assets/products/images'), $namePhotoOne);
        }
        // "photo_two"
        if($request->file('photo_two') === null){
            $namePhotoTwo = "";
        }else{
            $newPhotoTwo = time() . '-' . $request->file('photo_two')->getClientOriginalName();
            $sizePhotoTwo = $request->file('photo_two')->getSize();
            $namePhotoTwo = $newPhotoTwo;
            $request->file('photo_two')->move(public_path('assets/products/images'), $namePhotoTwo);
        }
        // "photo_three"
        if($request->file('photo_three') === null){
            $namePhotoThree = "";
        }else{
            $newPhotoThree = time() . '-' . $request->file('photo_three')->getClientOriginalName();
            $sizePhotoThree = $request->file('photo_three')->getSize();
            $namePhotoThree = $newPhotoThree;
            $request->file('photo_three')->move(public_path('assets/products/images'), $namePhotoThree);
        }
        // "photo_three"
        if($request->file('photo_four') === null){
            $namePhotoFour = "";
        }else{
            $newPhotoFour = time() . '-' . $request->file('photo_four')->getClientOriginalName();
            $sizePhotoFour = $request->file('photo_four')->getSize();
            $namePhotoFour = $newPhotoFour;
            $request->file('photo_four')->move(public_path('assets/products/images'), $namePhotoFour);
        }

        // Calling Product Model
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->main_photo =  $nameMainPhoto;
        $product->photo_one =  $namePhotoOne;
        $product->photo_two =  $namePhotoTwo;
        $product->photo_three =  $namePhotoThree; 
        $product->photo_four =  $namePhotoFour; 
        $product->price = $request->price;
        $product->compare_at_price = $request->compare_at_price; 
        $product->stock = $request->stock; 
        $product->status = $request->status;
        $product->product_brands_id = $request->brand;
        $product->product_cases_id = $request->case;
        $product->product_mouvements_id = $request->mouvement;
        $product->product_types_id = $request->product_type;
        $product->product_genders_id = $request->product_gender;
        $product->product_collections_id = $request->collections;
        $product->product_materials_id = $request->material;            
        
        $product->save();
        session()->flash('success', "The product has been created successfully!"); 
        return redirect(route('product.index')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
       
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