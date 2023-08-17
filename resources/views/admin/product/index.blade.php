<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Products") }}
        </h2>
    </x-slot>
    <div>
        <!-- Titles  -->
        <div>
            <!-- Left -->
            <div>
                <div>All</div>
                <div>Active</div>
                <div>Draft</div>
                <div>Archive</div>
            </div>
            <!-- Right -->
            <div>
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" />
                </div>
                <div><i class="fa-solid fa-sort"></i></div>
            </div>
        </div>
        <!-- Table -->
        <table>
            <tr>
                <th>Title</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Compare at</th>
                <th>Status</th>
                <th>Product Type</th>
                <th>Product Category</th>
                <th>SKU</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Watch1</td>
                <th><img src="" alt="" /></th>
                <th>100Usd</th>
                <th>300usd</th>
                <th>Draft</th>
                <th>Watch</th>
                <th>men-watch</th>
                <th>320-333-222-11</th>
                <th>
                    <button>Edit</button>
                    <button>Delete</button>
                </th>
            </tr>
        </table>
    </div>
</x-app-layout>
