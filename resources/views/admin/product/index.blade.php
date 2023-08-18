<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Products") }}
        </h2>
    </x-slot>
    <div
        class="bg-white rounded-lg border border-gray-300 shadow-md mt-5 w-[90%] mx-auto overflow-scroll  whitespace-nowrap xl:w-[1200px] xl:mx-auto">
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
            <tr class="bg-gray-100 border border-b-gray-200">
                <th class="text-sm font-normal py-1 border">Title</th>
                <th class="text-sm font-normal py-1 border w-[130px]">Photo</th>
                <th class="text-sm font-normal py-1 border">Price</th>
                <th class="text-sm font-normal py-1 border">Compare at</th>
                <th class="text-sm font-normal py-1 border">Status</th>
                <th class="text-sm font-normal py-1 border">Product Type</th>
                <th class="text-sm font-normal py-1 border w-[130px]">Product Gender</th>
                <th class="text-sm font-normal py-1 border">SKU</th>
                <th class="text-sm font-normal py-1 border w-[230px]">Actions</th>
            </tr>
            <tr class="w-full">
                <td class="text-sm font-normal py-3 border text-center">Watch1</td>
                <td class="text-sm font-normal py-3 border text-center w-[130px] flex justify-center items-center">
                    <img class="w-[30px]"
                        src="{{ url('/images/1776af86c6c89504f566907daf96d2da0328627a0de9fdde33a227dfdec6f30e.jpeg') }}"
                        alt="" />
                </td>
                <td class="text-sm font-normal py-3 border text-center">100Usd</td>
                <td class="text-sm font-normal py-3 border text-center">300usd</td>
                <td class="text-sm font-normal py-3 border text-center">Draft</td>
                <td class="text-sm font-normal py-3 border text-center">Watch</td>
                <td class="text-sm font-normal py-3 border text-center">men-watch</td>
                <td class="text-sm font-normal py-3 border text-center">320-333-222-11</td>
                <td class="text-sm font-normal py-3 border text-center w-[230px]">
                    <a href="#">
                        <button class="bg-green-700 w-16 py-1 rounded-md text-white font-semibold uppercase">
                            Edit
                        </button>
                    </a>
                    <a href="#">
                        <button
                            class="bg-red-700 w-16 py-1 rounded-md text-white font-semibold uppercase">Delete</button>
                    </a>
                </td>
            </tr>

        </table>
    </div>
</x-app-layout>