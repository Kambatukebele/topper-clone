<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Add Product") }}
        </h2>
    </x-slot>
    <form enctype="multipart/form-data" method="POST" action="{{ route('product.store') }}"
        enctype="multipart/form-data" class="w-full lg:w-[900px] lg:mx-auto lg:flex lg:justify-between lg:items-start">
        @csrf
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
                        <input type="text" name="title" value="{{ old('title') }}" placeholder="Short sleeve t-shirt"
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
                        <textarea name="description" cols="30" rows="5" class="w-full rounded-lg text-sm">
                        {{ old('description') }}
                        </textarea>
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
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="main_photo" value="">
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
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_one" value="">
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
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_two" value="">
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
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_three" value="">
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
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_four" value="">
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
                            <input type="text" name="price" placeholder="$100" class="rounded-lg w-full text-sm" />
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
                            <input type="text" name="compare_at_price" placeholder="$100"
                                class="rounded-lg w-full text-sm" />
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
                            <input type="text" name="stock" placeholder="1100" class="rounded-lg w-full text-sm" />
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
                            <option selected value="">Choose</option>
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
                            <option selected value="">Choose</option>
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
                            <option selected value="">Choose</option>
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
                                <option selected value="">Choose</option>
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
                                <option selected value="">Choose</option>
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
                                <option selected value="">Choose</option>
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
                                <option selected value="">Choose</option>
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