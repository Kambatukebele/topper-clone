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
        ->leftJoin('product_brands', 'product_brands.id', '=', 'products.product_brands_id')
        ->leftJoin('product_prices', 'product_prices.id', '=', 'products.product_price_id')
        ->leftJoin('product_images', 'product_images.id', '=', 'products.product_image_id')
        ->leftJoin('product_genders', 'product_genders.id', '=', 'products.product_genders_id')
        ->leftJoin('product_types', 'product_types.id', '=', 'products.product_types_id')
        ->select('products.*', 'product_brands.brand_name', 'product_prices.price', 'product_prices.compare_at', 'product_images.main_photo', 'product_genders.gender_name', 'product_types.type_name')
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
        ->leftJoin('product_brands', 'product_brands.id', '=', 'products.product_brands_id')
        ->leftJoin('product_prices', 'product_prices.id', '=', 'products.product_price_id')
        ->leftJoin('product_images', 'product_images.id', '=', 'products.product_image_id')
        ->leftJoin('product_genders', 'product_genders.id', '=', 'products.product_genders_id')
        ->leftJoin('product_types', 'product_types.id', '=', 'products.product_types_id')
        ->leftJoin('product_collections', 'product_collections.id', '=', 'products.product_collections_id')
        ->leftJoin('product_mouvements', 'product_mouvements.id', '=', 'products.product_mouvements_id')
        ->leftJoin('product_cases', 'product_cases.id', '=', 'products.product_cases_id')
        ->leftJoin('product_materials', 'product_materials.id', '=', 'products.product_materials_id')
        ->select('products.*', 'product_brands.brand_name', 'product_prices.price',  'product_prices.compare_at', 'product_images.main_photo', 'product_images.photo_one', 'product_images.photo_two', 'product_images.photo_three', 'product_images.photo_four','product_genders.gender_name', 'product_types.type_name', 'product_collections.collection_name', 'product_cases.case_name', 'product_mouvements.mouvement_name', 'product_materials.material_name')
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
    public function update(Request $request, Product $product, $id)
    {
         //Validate Product inputs
         $validated = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "main_photo" => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_one"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_two"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_three"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "photo_four"  => "image|mimes:jpg,png,webp,jpeg|max:2048",
            "price"  => "required|string",
            "compare_at_price"  => "string",
            "stock"  => "required|string",
            "status"  => "required|string",
        ]);

        //Calling product and Product_image model to find the corresponding image linked to the product id. 
        $image = DB::table('products')
                ->join('product_images', 'product_images.id', '=', 'products.product_image_id')
                ->select('products.*', 'main_photo', 'photo_one', 'photo_two', 
                'photo_three', 'photo_four')
                ->where('products.id', '=', $id)
                ->get();
        //Main Photo image
        if($request->file('main_photo') === null){
            $nameMainPhoto = $image[0]->main_photo;
        }elseif($request->file('main_photo') !== null){           
            // if there is not picture yet in the DB
            if(!empty($image[0]->main_photo) && isset($image[0]->main_photo)){
                $imagePath = public_path('assets/products/images/') . $image[0]->main_photo;
                if(file_exists($imagePath)){
                    unlink($imagePath);
                }
                //Add the new photo            
                $New_main_photo = time() . '-' . $request->file('main_photo')->getClientOriginalName();
                $sizeMainPhoto = $request->file('main_photo')->getSize();
                $nameMainPhoto = $New_main_photo;
                $request->file('main_photo')->move(public_path('assets/products/images'), $nameMainPhoto); 
            }else{
                $New_main_photo = time() . '-' . $request->file('main_photo')->getClientOriginalName();
                $sizeMainPhoto = $request->file('main_photo')->getSize();
                $nameMainPhoto = $New_main_photo;
                $request->file('main_photo')->move(public_path('assets/products/images'), $nameMainPhoto); 
            }
                       
        }
        //photo_one
        if($request->file('photo_one') === null){
            $namePhotoOne = $image[0]->photo_one;
        }elseif($request->file('photo_one') !== null){           
            // if there is not picture yet in the DB
            if(!empty($image[0]->photo_one) && isset($image[0]->photo_one)){
                $imagePathOne = public_path('assets/products/images/') . $image[0]->photo_one;
                if(file_exists($imagePathOne)){
                    unlink($imagePathOne);
                }
                //Add the new photo            
                $newPhotoOne = time() . '-' . $request->file('photo_one')->getClientOriginalName();
                $sizePhotoOne = $request->file('photo_one')->getSize();
                $namePhotoOne = $newPhotoOne;
                $request->file('photo_one')->move(public_path('assets/products/images'), $namePhotoOne); 
            }else{
                $newPhotoOne = time() . '-' . $request->file('photo_one')->getClientOriginalName();
                $sizePhotoOne = $request->file('photo_one')->getSize();
                $namePhotoOne = $newPhotoOne;
                $request->file('photo_one')->move(public_path('assets/products/images'), $namePhotoOne); 
            }               
        }
        // "photo_two"
        if($request->file('photo_two') === null){
            $namePhotoTwo = $image[0]->photo_two;
        }elseif($request->file('photo_two') !== null){           
            // if there is not picture yet in the DB
            if(!empty($image[0]->photo_two) && isset($image[0]->photo_two)){
                $imagePathTwo = public_path('assets/products/images/') . $image[0]->photo_two;
                if(file_exists($imagePathTwo)){
                    unlink($imagePathTwo);
                }
                //Add the new photo            
                $newPhotoTwo = time() . '-' . $request->file('photo_two')->getClientOriginalName();
                $sizePhotoTwo = $request->file('photo_two')->getSize();
                $namePhotoTwo = $newPhotoTwo;
                $request->file('photo_two')->move(public_path('assets/products/images'), $namePhotoTwo); 
            }else{
                $newPhotoTwo = time() . '-' . $request->file('photo_two')->getClientOriginalName();
                $sizePhotoTwo = $request->file('photo_two')->getSize();
                $namePhotoTwo = $newPhotoTwo;
                $request->file('photo_two')->move(public_path('assets/products/images'), $namePhotoTwo); 
            }               
        }
        // "photo_three"
        if($request->file('photo_three') === null){
            $namePhotoThree = $image[0]->photo_three;
        }elseif($request->file('photo_three') !== null){           
            // if there is not picture yet in the DB
            if(!empty($image[0]->photo_three) && isset($image[0]->photo_three)){
                $imagePathThree = public_path('assets/products/images/') . $image[0]->photo_three;
                if(file_exists($imagePathThree)){
                    unlink($imagePathThree);
                }
                //Add the new photo            
                $newPhotoThree = time() . '-' . $request->file('photo_three')->getClientOriginalName();
                $sizePhotoThree = $request->file('photo_three')->getSize();
                $namePhotoThree = $newPhotoThree;
                $request->file('photo_three')->move(public_path('assets/products/images'), $namePhotoThree); 
            }else{
                $newPhotoThree = time() . '-' . $request->file('photo_three')->getClientOriginalName();
                $sizePhotoThree = $request->file('photo_three')->getSize();
                $namePhotoThree = $newPhotoThree;
                $request->file('photo_three')->move(public_path('assets/products/images'), $namePhotoThree); 
            }               
        }
        // "photo_four"
        if($request->file('photo_four') === null){
            $namePhotoFour = $image[0]->photo_four;
        }elseif($request->file('photo_four') !== null){           
            // if there is not picture yet in the DB
            if(!empty($image[0]->photo_four) && isset($image[0]->photo_four)){
                $imagePathFour = public_path('assets/products/images/') . $image[0]->photo_four;
                if(file_exists($imagePathFour)){
                    unlink($imagePathFour);
                }
                //Add the new photo            
                $newPhotoFour = time() . '-' . $request->file('photo_four')->getClientOriginalName();
                $sizePhotoFour = $request->file('photo_four')->getSize();
                $namePhotoFour = $newPhotoFour;
                $request->file('photo_four')->move(public_path('assets/products/images'), $namePhotoFour); 
            }else{
                $newPhotoFour = time() . '-' . $request->file('photo_four')->getClientOriginalName();
                $sizePhotoFour = $request->file('photo_four')->getSize();
                $namePhotoFour = $newPhotoFour;
                $request->file('photo_four')->move(public_path('assets/products/images'), $namePhotoFour); 
            }               
        }
        //Calling Product Image Model
        $images = Product_image::find($image[0]->product_image_id);
        $images->main_photo = $nameMainPhoto;
        $images->photo_one = $namePhotoOne;
        $images->photo_two = $namePhotoTwo;
        $images->photo_three = $namePhotoThree;
        $images->photo_four = $namePhotoFour;
        $images->save();

        //Calling the Product Price Model
        $price = Product_price::find($image[0]->product_price_id);
        $price->price = $request->price;
        $price->compare_at = $request->compare_at;
        $price->save();
 
        //Calling Product Model
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;
        $product->product_image_id = $images->id;
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
        session()->flash('success', "The product has been updated successfully!"); 
        return redirect(route('product.index')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $image = DB::table('products')
                ->join('product_images', 'product_images.id', '=', 'products.product_image_id')
                ->select('products.*', 'main_photo', 'photo_one', 'photo_two', 
                'photo_three', 'photo_four')
                ->where('products.id', '=', $id)
                ->get();
       
        //Calling Product Image Model
        $images = Product_image::find($image[0]->product_image_id);
        $imagePathMain = public_path('assets/products/images/') . $image[0]->main_photo;
        $imagePathOne = public_path('assets/products/images/') . $image[0]->photo_one;
        $imagePathTwo = public_path('assets/products/images/') . $image[0]->photo_two;
        $imagePathThree = public_path('assets/products/images/') . $image[0]->photo_three;
        $imagePathFour = public_path('assets/products/images/') . $image[0]->photo_four;

        if(file_exists($imagePathMain)){
            unlink($imagePathMain);
        }
        if(file_exists($imagePathOne)){
            unlink($imagePathOne);
        }
        if(file_exists($imagePathTwo)){
            unlink($imagePathTwo);
        }
        if(file_exists($imagePathThree)){
            unlink($imagePathThree);
        }
        if(file_exists($imagePathFour)){
            unlink($imagePathFour);
        }
        $images->delete();

        //Calling the Product Price Model
        $price = Product_price::find($image[0]->product_price_id);
        $price->delete();
 
        //Calling Product Model
        $product = Product::find($id);
        $product->delete();
        session()->flash('success', "The product has been deleted successfully!"); 
        return redirect(route('product.index')); 
    }
}