<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Product
    </h2>
</x-slot>

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-lg p-6 rounded-lg">
            <!-- Tombol Create -->
            <div class="mb-6">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Create
                </button>
            </div>

            <!-- Dua kolom -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Kolom Dropdown -->
                <div class="bg-white p-4 rounded-lg">
                    <h2 class="text-lg font-semibold mb-2">Pilih Opsi</h2>
                    <select wire:model.live="perPage" class="w-1/3 p-2 border border-gray-300 rounded-lg">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                     </select>
                </div>

                <!-- Kolom Search -->
                <div class="bg-white p-4 rounded-lg">
                    <h2 class="text-lg font-semibold mb-2">Cari Produk</h2>
                    <div class="flex">
                        <!-- LIVE search tanpa tombol submit -->
                        <input wire:model.live="search" type="text" placeholder="Masukkan kata kunci..." class="w-full p-2 border border-gray-300 rounded-l-lg">
                    </div>
                </div>
            </div>

            <!-- table -->

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2 text-left">Product Name</th>
                            <th class="border px-4 py-2 text-left">Description</th>
                            <th class="border px-4 py-2 text-left">Price</th>
                            <th class="border px-4 py-2 text-left">Image</th>
                            <th class="border px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- menampilkan data products -->
                        @foreach ($products as $product)
                            <tr>
                                <td class="border px-4 py-2"> {{ $product->name }} </td>
                                <td class="border px-4 py-2"> {{ $product->description }} </td>
                                <td class="border px-4 py-2"> {{ $product->price }} </td>
                                <td class="border px-4 py-2"> {{ $product->image }} </td>
                                <td class="border px-4 py-2">
                                    <button class="w-full px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</button>
                                    <button class="w-full px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4"> {{ $products->links() }} </div>

        </div>
    </div>
</div>
