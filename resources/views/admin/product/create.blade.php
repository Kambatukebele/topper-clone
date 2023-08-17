<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Add Product") }}
        </h2>
    </x-slot>

    <form>
        <!-- Left Side -->
        <div>
            <!-- Title and Description Block -->
            <div>
                <!-- Title -->
                <div>
                    <div>
                        <label for="title">Title</label>
                    </div>
                    <div>
                        <input
                            type="text"
                            name="title"
                            placeholder="Short sleeve t-shirt"
                        />
                    </div>
                </div>
                <!-- Description -->
                <div>
                    <div>
                        <label for="description">Description</label>
                    </div>
                    <div>
                        <textarea
                            name="description"
                            cols="30"
                            rows="10"
                        ></textarea>
                    </div>
                </div>
            </div>
            <!-- Images Block -->
            <div>
                <!-- Main product Image -->
                <div>
                    <div>
                        <label for="main-image">Main Image</label>
                    </div>
                    <div>
                        <input type="file" name="main_photo" />
                    </div>
                </div>
                <!-- Photo one -->
                <div>
                    <div>
                        <label for="photo_one">Photo 1</label>
                    </div>
                    <div>
                        <input type="file" name="photo_one" />
                    </div>
                </div>
                <!-- Photo two -->
                <div>
                    <div>
                        <label for="photo_two">Photo 2</label>
                    </div>
                    <div>
                        <input type="file" name="photo_two" />
                    </div>
                </div>
                <!-- Photo three -->
                <div>
                    <div>
                        <label for="photo_three">Photo 3</label>
                    </div>
                    <div>
                        <input type="file" name="photo_three" />
                    </div>
                </div>
                <!-- Logo brand -->
                <div>
                    <div>
                        <label for="logo_brand">Logo Image</label>
                    </div>
                    <div>
                        <input type="file" name="logo_brand" />
                    </div>
                </div>
            </div>
            <!-- Prices Block -->
            <div>
                <div>Pricing</div>
                <div>
                    <div>
                        <div>
                            <label for="price">Price</label>
                        </div>
                        <div>
                            <input type="text" name="price" />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="compare_at_price"
                                >Compare-at Price</label
                            >
                        </div>
                        <div>
                            <input type="text" name="compare_at_price" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div>
            <!-- Status -->
            <div>
                <div>Status</div>
                <div>
                    <select name="status" id="">
                        <option value="draft">Draft</option>
                        <option value="Active">Active</option>
                    </select>
                </div>
            </div>
            <div>
                <div>Product Organisation</div>
                <div>
                    <div>
                        <label for="product_category">Product Category</label>
                    </div>
                    <div><input type="text" name="product_category" /></div>
                </div>
                <div>
                    <div><label for="product_type">Product Type</label></div>
                    <div><input type="text" name="product_type" /></div>
                </div>
                <div>
                    <div><label for="collections">Collections</label></div>
                    <div><input type="text" name="collections" /></div>
                </div>
                <div>
                    <div><label for="tags">Tags</label></div>
                    <div><input type="text" name="tags" /></div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
