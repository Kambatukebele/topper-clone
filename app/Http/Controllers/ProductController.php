<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;
use App\Models\ProductCase;
use App\Models\ProductType;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use App\Models\Product_image;
use App\Models\Product_price;
use App\Models\ProductGender;
use App\Models\ProductMaterial;
use App\Models\ProductMouvement;
use App\Models\ProductCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::latest()->get();
        $products = DB::table('products')
        ->leftJoin('product_brands', 'products.id', '=', 'product_brands.id')
        ->leftJoin('product_prices', 'products.id', '=', 'product_prices.id')
        ->leftJoin('product_images', 'products.id', '=', 'product_images.id')
        ->leftJoin('product_genders', 'products.id', '=', 'product_genders.id')
        ->leftJoin('product_types', 'products.id', '=', 'product_types.id')
        ->select('products.*', 'product_brands.brand_name', 'product_prices.price',  'product_prices.compare_at', 'product_images.main_photo', 'product_genders.gender_name', 'product_types.type_name')
        ->get();
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
            "compare_at_price"  => "string",
            "stock"  => "required|string",
            "status"  => "required|string",
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

        //Calling Product Image Model
        $image = new Product_image;
        $image->main_photo = $nameMainPhoto;
        $image->photo_one = $namePhotoOne;
        $image->photo_two = $namePhotoTwo;
        $image->photo_three = $namePhotoThree;
        $image->photo_four = $namePhotoFour;
        $image->save();

        // Calling the Product Price Model
        $price = new Product_price;
        $price->price = $request->price;
        $price->compare_at = $request->compare_at;
        $price->save();

        // Calling Product Model
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->product_image_id = $image->id;
        $product->user_id = auth()->user()->id;
        $product->product_price_id = $price->id; 
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
    public function edit(Product $product, $id)
    {
        $genders = ProductGender::all();
        $brands = ProductBrand::all();
        $types = ProductType::all();
        $collections = ProductCollection::all();
        $cases = ProductCase::all();
        $mouvements = ProductMouvement::all();
        $materials = ProductMaterial::all();
        $product = DB::table('products')
        ->leftJoin('product_brands', 'products.id', '=', 'product_brands.id')
        ->leftJoin('product_prices', 'products.id', '=', 'product_prices.id')
        ->leftJoin('product_images', 'products.id', '=', 'product_images.id')
        ->leftJoin('product_genders', 'products.id', '=', 'product_genders.id')
        ->leftJoin('product_types', 'products.id', '=', 'product_types.id')
        ->select('products.*', 'product_brands.brand_name', 'product_prices.price',  'product_prices.compare_at', 'product_images.main_photo', 'product_genders.gender_name', 'product_types.type_name')
        ->where('products.id', '=', $id)
        ->get();
        return view('admin.products.edit', [
            'brands' => $brands,
            'genders' => $genders,
            'types' => $types,
            'collections' => $collections,
            'cases' => $cases,
            'mouvements' => $mouvements,
            'materials' => $materials,
            'product' => $product,
        ]); 
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