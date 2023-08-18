<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Add Product") }}
        </h2>
    </x-slot>

    <form method="POST" class="w-full lg:w-[900px] lg:mx-auto lg:flex lg:justify-between lg:items-start">
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
                        <input type="text" name="title" placeholder="Short sleeve t-shirt"
                            class="rounded-lg w-full text-sm" />
                    </div>
                </div>
                <!-- Description -->
                <div class="mt-2 block w-full">
                    <div class="block">
                        <label for="description" class="font-light text-sm text-gray-500">Description</label>
                    </div>
                    <div class="block">
                        <textarea name="description" cols="30" rows="5" class="w-full rounded-lg text-sm"></textarea>
                    </div>
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
                <!-- Photo one -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_one" value="">
                            <small class="text-xs text-gray-500">Image one : PNG,JPG, JPEG, WEBP</small>
                        </label>

                    </div>
                </div>
                <!-- Photo two -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_two" value="">
                            <small class="text-xs text-gray-500">Image two : PNG,JPG, JPEG, WEBP</small>
                        </label>

                    </div>
                </div>
                <!-- Photo three -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="photo_three" value="">
                            <small class="text-xs text-gray-500">Image three : PNG,JPG, JPEG, WEBP</small>
                        </label>

                    </div>
                </div>
                <!-- Logo brand -->
                <div class="border border-dashed p-5 my-3">
                    <div class="block lg:mx-20">
                        <label for="main_photo" class="text-xs">
                            <input type="file" name="logo_brand" value="">
                            <small class="text-xs text-gray-500">Logo Brand : PNG,JPG, JPEG, WEBP</small>
                        </label>
                    </div>
                </div>
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
                    </div>
                </div>
            </div>
            <!-- Product Inventory -->
            <div class="w-full my-5 bg-white shadow-md p-3 border border-gray-300 rounded-lg">
                <div class="font-semibold text-sm text-black my-3">Inventory</div>
                <div>
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">In Stock</label>
                        </div>
                        <div class="block">
                            <input type="text" name="inventory" placeholder="1100" class="rounded-lg w-full text-sm" />
                        </div>
                    </div>
                    <div class="block mt-2">
                        <div class="block w-full">
                            <div class="block">
                                <label for="price" class="font-light text-sm text-gray-500">SKU</label>
                            </div>
                            <div class="block">
                                <input type="text" name="sku" placeholder="Topper9893345"
                                    class="rounded-lg w-full text-sm" />
                            </div>
                        </div>
                    </div>
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
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                        </select>
                    </div>
                </div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="product_type" class="font-light text-sm text-gray-500">Product Type</label>
                    </div>
                    <div><input type="text" name="product_type" placeholder="active"
                            class="rounded-lg w-full text-sm" /></div>
                </div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="collections" class="font-light text-sm text-gray-500">Collections</label>
                    </div>
                    <div>
                        <select name="collections" class="rounded-lg w-full text-sm">
                            <option value="watches">Watches</option>
                            <option value="pre-owned">Pre-Owned</option>
                            <option value="jewelry">Jewelry</option>
                        </select>
                    </div>
                </div>
                <div class="block w-full mt-2">
                    <div class="block">
                        <label for="tags" class="font-light text-sm text-gray-500">Tags</label>
                    </div>
                    <div><input type="text" name="tags" placeholder="Luxury" class="rounded-lg w-full text-sm" /></div>
                </div>
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
                            <input type="text" name="brand" placeholder="Prada" class="rounded-lg w-full text-sm" />
                        </div>
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Case</label>
                        </div>
                        <div class="block">
                            <input type="text" name="brand" placeholder="Prada" class="rounded-lg w-full text-sm" />
                            <small class="xs text-gray-500 font-light">This apply only for watches
                                product</small>
                        </div>
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Movement</label>
                        </div>
                        <div class="block">
                            <input type="text" name="movement" placeholder="Prada" class="rounded-lg w-full text-sm" />
                            <small class="xs text-gray-500 font-light">This apply only for watches product</small>
                        </div>
                    </div>
                </div>
                <div class="block mt-2">
                    <div class="block w-full">
                        <div class="block">
                            <label for="price" class="font-light text-sm text-gray-500">Material</label>
                        </div>
                        <div class="block">
                            <input type="text" name="material" placeholder="Prada" class="rounded-lg w-full text-sm" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</x-app-layout>