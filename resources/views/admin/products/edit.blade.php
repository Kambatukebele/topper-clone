<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Edit Product") }}
        </h2>
    </x-slot>
    <form enctype="multipart/form-data" method="POST" action="{{ route('product.update', $product[0]->id) }}" class="w-full lg:w-[900px] lg:mx-auto lg:flex lg:justify-between lg:items-start">
        @csrf
        @method('PUT')
        <!-- Left Side -->
        <div class="w-[90%] mx-auto md:w-[560px]  lg:w-[510px]">
            <!-- Title and Description Block -->
            <div class="w-full bg-white my-5 p-3 border border-gray-300 shadow-md rounded-lg">
                <!-- Title -->
                <div class="block w-full">
                    <div class="block">
                        <label for="title" class="font-light text-sm text-gray-500">Title</label>
                    </div>
                    <div class="block">
                        <input type="text" name="title" value="{{ old('title', $product[0]->title) }}" placeholder="Short sleeve t-shirt"
                            class="rounded-lg w-full text-sm" />
                    </div>
                    @error('title')
                    <div class="text-sm my-1  text-red-900 pl-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!-- Description -->
                <div class="mt-2 block w-full">
                    <div class="block">
                        <label for="description" class="font-light text-sm text-gray-500">Description</label>
                    </div>
                    <div class="block">
                        <textarea name="description" cols="30" rows="5" class="w-full rounded-lg text-sm">{{ old('description', $product[0]->description) }}</textarea>
                    </div>
                    @error('description')
                    <div class="text-sm my-1  text-red-900 pl-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- Images Block -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <!-- Main product Image -->
                <!-- Images Title -->
                <div class="font-semibold text-sm text-black my-3">
                    Media
                </div>
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        @if ($product[0]->main_photo)
                           <div class="w-[100px] h-[100px] mb-5">
                                <img class="w-full h-full object-cover object-center" src="{{ url('/assets/products/images/' . $product[0]->main_photo) }}" alt="">
                           </div>
                        @endif
                        {{-- <button class="bg-gray-200 py-1 px-2 text-xs rounded cursor-pointer mb-5" type="button" id="btn-main_photo">
                            Change image
                        </button> --}}
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="main_photo" id="main_photo" value="{{ old('main_photo', $product[0]->main_photo) }}">
                            <small class="text-xs text-gray-500">Main Image : PNG,JPG, JPEG, WEBP</small>
                        </label>
                    </div>
                </div>
                @error('main_photo')
                <div class="text-sm my-1  text-red-900 pl-3">
                    {{ $message }}
                </div>
                @enderror
                <!-- Photo one -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        @if ($product[0]->photo_one)
                           <div class="w-[100px] h-[100px] mb-5">
                                <img class="w-full h-full object-cover object-center" src="{{ url('/assets/products/images/' . $product[0]->photo_one) }}" alt="">
                           </div>
                        @endif
                        <label for="photo_one" class="text-xs">
                            <input type="file" name="photo_one" value="{{ old('photo_one') }}">
                            <small class="text-xs text-gray-500">Image one : PNG,JPG, JPEG, WEBP</small>
                        </label>

                    </div>
                </div>
                @error('photo_one')
                <div class="text-sm my-1  text-red-900 pl-3">
                    {{ $message }}
                </div>
                @enderror
                <!-- Photo two -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="main_two" class="text-xs">
                            @if ($product[0]->photo_two)
                           <div class="w-[100px] h-[100px] mb-5">
                                <img class="w-full h-full object-cover object-center" src="{{ url('/assets/products/images/' . $product[0]->photo_two) }}" alt="">
                           </div>
                        @endif
                            <input type="file" name="photo_two" value="{{ old('photo_two') }}">
                            <small class="text-xs text-gray-500">Image two : PNG,JPG, JPEG, WEBP</small>
                        </label>

                    </div>
                </div>
                @error('photo_two')
                <div class="text-sm my-1  text-red-900 pl-3">
                    {{ $message }}
                </div>
                @enderror
                <!-- Photo three -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="photo_three" class="text-xs">
                            @if ($product[0]->photo_three)
                                <div class="w-[100px] h-[100px] mb-5">
                                        <img class="w-full h-full object-cover object-center" src="{{ url('/assets/products/images/' . $product[0]->photo_three) }}" alt="">
                                </div>
                            @endif
                            <input type="file" name="photo_three" value="{{ old('photo_three') }}">
                            <small class="text-xs text-gray-500">Image three : PNG,JPG, JPEG, WEBP</small>
                        </label>
                    </div>
                </div>
                @error('photo_three')
                <div class="text-sm my-1  text-red-900 pl-3">
                    {{ $message }}
                </div>
                @enderror
                <!-- Logo brand -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        @if ($product[0]->photo_four)
                           <div class="w-[100px] h-[100px] mb-5">
                                <img class="w-full h-full object-cover object-center" src="{{ url('/assets/products/images/' . $product[0]->photo_four) }}" alt="">
                           </div>
                        @endif
                        <label for="photo_four" class="text-xs">
                            <input type="file" name="photo_four" value="{{ old('photo_four') }}">
                            <small class="text-xs text-gray-500">Photo Four : PNG,JPG, JPEG, WEBP</small>
                        </label>
                    </div>
                </div>
                @error('photo_four')
                <div class="text-sm my-1  text-red-900 pl-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!-- Prices Block -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Pricing</div>
                <div>
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Price</label>
                        </div>
                        <div class="block">
                            <input type="text" value="{{ old('price', $product[0]->price) }}" name="price" placeholder="$100" class="rounded-lg w-full text-sm" />
                        </div>
                        @error('price')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="block w-full mt-2">
                        <div class="block">
                            <label for="compare_at_price" class="font-light text-sm text-gray-500">Compare-at
                                Price</label>
                        </div>
                        <div class="block">
                            <input type="text" name="compare_at" placeholder="$100"
                                class="rounded-lg w-full text-sm" value="{{ old('compare_at', $product[0]->compare_at) }}" />
                        </div>
                        @error('compare_at_price')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Product Inventory -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Stock</div>
                <div>
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">In Stock</label>
                        </div>
                        <div class="block">
                            <input type="text" value="{{ old('stock', $product[0]->stock) }}" name="stock" placeholder="1100" class="rounded-lg w-full text-sm" />
                        </div>
                        @error('stock')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="block mt-2">
                        <div class="block w-full">
                            <div class="block">
                                <label for="price" class="font-light text-sm text-gray-500">SKU</label>
                            </div>
                            <div class="block">
                                <input type="text" name="sku" placeholder="Topper9893345"
                                    class="rounded-lg w-full text-sm" />
                            </div>
                            @error('sku')
                            <div class="text-sm my-1  text-red-900 pl-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="w-[90%] mx-auto md:w-[560px] lg:w-[300px]">
            <!-- Status -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Status</div>
                <div class="block w-full mt-2">
                    <select name="status" id="" class="rounded-lg w-full text-sm">
                        @if ($product[0]->status)
                            <option value="{{ $product[0]->status }}" @selected(old('status'))>{{ Str::ucfirst($product[0]->status) }}</option>
                        @endif
                        <option value="draft">Draft</option>
                        <option value="comming-soon">Comming soon</option>
                        <option value="Active">Active</option>
                    </select>
                </div>
            </div>
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Product Organisation</div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="product_category" class="font-light text-sm text-gray-500">Product Gender</label>
                    </div>
                    <div>
                        <select name="product_gender" id="" class="rounded-lg w-full text-sm">
                            @if ($product[0]->gender_name)
                            <option value="{{ $product[0]->product_genders_id }}" @selected(old('gender_name'))>{{ Str::ucfirst($product[0]->gender_name) }}</option>
                            @endif
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ Str::ucfirst($gender->gender_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="product_type" class="font-light text-sm text-gray-500">Product Type</label>
                    </div>
                    <div>
                        <select name="product_type" id="" class="rounded-lg w-full text-sm">
                            @if ($product[0]->type_name)
                            <option value="{{ $product[0]->product_types_id }}" @selected(old('type_name'))>{{ Str::ucfirst($product[0]->type_name) }}</option>
                            @endif
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ Str::ucfirst($type->type_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('product_type')
                    <div class="text-sm my-1  text-red-900 pl-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="collections" class="font-light text-sm text-gray-500">Collections</label>
                    </div>
                    <div>
                        <select name="collections" class="rounded-lg w-full text-sm">
                            @if ($product[0]->collection_name)
                            <option value="{{ $product[0]->product_collections_id }}" @selected(old('collection_name'))>{{ Str::ucfirst($product[0]->collection_name) }}</option>
                            @endif
                            @foreach ($collections as $collection)
                            <option value="{{ $collection->id }}">{{ Str::ucfirst($collection->collection_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="block w-full mt-2">
                    <div class="block">
                        <label for="tags" class="font-light text-sm text-gray-500">Tags</label>
                    </div>
                    <div>
                        <input type="text" name="tags" placeholder="Luxury" class="rounded-lg w-full text-sm" />
                    </div>
                    @error('tags')
                    <div class="text-sm my-1  text-red-900 pl-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div> --}}
            </div>
           
            <!-- Addtional Information -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Additional Information</div>
                <div>
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Add your product brand</label>
                        </div>
                        <div class="block">
                            <select name="brand" class="rounded-lg w-full text-sm">
                                @if ($product[0]->brand_name)
                                <option value="{{ $product[0]->product_brands_id }}" @selected(old('brand_name'))>{{ Str::ucfirst($product[0]->brand_name) }}</option>
                                @endif
                                @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ Str::ucfirst($brand->brand_name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('brand')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Case</label>
                        </div>
                        <div class="block">
                            <select name="case" class="rounded-lg w-full text-sm">
                                @if ($product[0]->case_name)
                                <option value="{{ $product[0]->product_cases_id }}" @selected(old('case_name'))>{{ Str::ucfirst($product[0]->case_name) }}</option>
                                @endif
                                @foreach ($cases as $case)
                                <option value="{{ $case->id }}">{{ Str::ucfirst($case->case_name) }}</option>
                                @endforeach
                            </select>
                            <small class="xs text-gray-500 font-light">This apply only for watches
                                product</small>
                        </div>
                        @error('case')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Movement</label>
                        </div>
                        <div class="block">
                            <select name="mouvement" class="rounded-lg w-full text-sm">
                                @if ($product[0]->mouvement_name)
                                <option value="{{ $product[0]->product_mouvements_id }}" @selected(old('mouvement_name'))>{{ Str::ucfirst($product[0]->mouvement_name) }}</option>
                                @endif
                                @foreach ($mouvements as $mouvement)
                                <option value="{{ $mouvement->id }}">{{ Str::ucfirst($mouvement->mouvement_name) }}</option>
                                @endforeach
                            </select>
                            <small class="xs text-gray-500 font-light">This apply only for watches product</small>
                        </div>
                        @error('mouvement')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Material</label>
                        </div>
                        <div class="block">
                            <select name="material" class="rounded-lg w-full text-sm">
                                @if ($product[0]->material_name)
                                <option value="{{ $product[0]->product_materials_id }}" @selected(old('material_name'))>{{ Str::ucfirst($product[0]->material_name) }}</option>
                                @endif
                                @foreach ($materials as $material)
                                <option value="{{ $material->id }}">{{ Str::ucfirst($material->material_name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('material')
                        <div class="text-sm my-1  text-red-900 pl-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="block">
                    <button type="submit"
                        class="rounded-lg w-full text-base bg-blue-800 text-white uppercase font-semibold py-2">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>