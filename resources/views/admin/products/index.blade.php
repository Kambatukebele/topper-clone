<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Products") }}
        </h2>
    </x-slot>
    <div
        class="bg-white rounded-lg border border-gray-300 shadow-md mt-5 w-[90%] mx-auto overflow-scroll  whitespace-nowrap xl:w-[1200px] xl:mx-auto xl:overflow-hidden">
        <!-- Titles  -->
        <div class="flex justify-between items-center border border-b-gray-300 py-2 px-5">
            <!-- Left -->
            <div class="flex justify-center items-center">
                <div
                    class="w-[35px] bg-gray-200 rounded-lg flex justify-center items-center text-sm p-1 mr-4 hover:cursor-pointer">
                    All</div>
                <div
                    class="w-[60px] bg-gray-200 rounded-lg flex justify-center items-center text-sm p-1 mr-4 hover:cursor-pointer">
                    Active
                </div>
                <div
                    class="w-[55px] bg-gray-200 rounded-lg flex justify-center items-center text-sm p-1 mr-4 hover:cursor-pointer">
                    Draft
                </div>
                <div
                    class="w-[65px] bg-gray-200 rounded-lg flex justify-center items-center text-sm p-1 mr-4 hover:cursor-pointer">
                    Archive
                </div>
            </div>
            <!-- Right -->
            <div class="flex justify-center items-center">
                <div
                    class=" w-[50px] py-1 flex justify-center items-center border border-gray-500 mr-2 hover:cursor-pointer shadow-md rounded-lg">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    {{-- <input type="search" /> --}}
                </div>
                <div
                    class=" w-[50px] py-1 flex justify-center items-center border border-gray-500 hover:cursor-pointer shadow-md rounded-lg">
                    <i class="fa-solid fa-sort text-sm"></i>
                </div>
            </div>
        </div>
        
        <!-- Table -->
            
        <table class="w-full">
            <tr class="bg-gray-100 border border-b-gray-200 w-[1200px]">
                <th class="text-sm font-normal py-1 border w-[150px]">Title</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Photo</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Price</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Compare at</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Status</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Product Type</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Product Gender</th>
                <th class="text-sm font-normal py-1 border w-[150px]">Actions</th>
            </tr>
            @foreach ($products as $product)            
            <tr class="w-full border">
                <td class="text-sm font-normal text-center h-[80px] w-[150px] lg:px-4">{{ Str::limit($product->title, 15, '...') }}</td>
                <td class="text-sm font-normal text-center w-[130px] h-[80px] flex justify-center items-center">
                    <div class="w-[50px] h-[50px] ">
                        <img class="w-full h-full object-cover object-center"
                        src="{{ url('assets/products/images') }}/{{ $product->main_photo }}"
                        alt="" />
                    </div>
                </td>
                <td class="text-sm font-normal  text-center h-[80px]">{{ $product->price }}</td>
                <td class="text-sm font-normal  text-center h-[80px]">{{ $product->compare_at }}</td>
                <td class="text-sm font-normal  text-center h-[80px]">{{ $product->status }}</td>
                <td class="text-sm font-normal  text-center h-[80px]">{{ $product->type_name }}</td>
                <td class="text-sm font-normal  text-center h-[80px]">{{ $product->gender_name }}</td>
                <td class="text-sm font-normal text-center h-[80px] w-[230px] flex justify-center items-center">
                    <a class="mr-2 h-0" href="{{ route("product.edit", $product->id) }}">
                        <button class="bg-green-700 w-16 py-1 rounded-md text-white font-semibold uppercase">
                            Edit
                        </button>
                    </a>
                    <form class="h-0" action="{{ route('product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" onclick="confirm('Are you sure you want to delete this product?')"
                                class="bg-red-700 w-16 py-1 rounded-md text-white font-semibold uppercase">
                                Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>