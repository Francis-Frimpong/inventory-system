<x-layout>
    <x-slot:title>
        Edit Product
    </x-slot:title>

    <div class="card">
    <div class="card-header">Edit Product</div>
    <div class="card-body">

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('Patch')
        <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" class="form-control" name="sku" value="{{ $product->sku }}">
        </div>

        <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-select" name="category_id">
         @foreach ( $categories as $category )

            <option value={{ $category->id }}
                {{ $product->category_id == $category->id ? 'selected' : '' }}
            >
                {{ $category->name }}
            </option>
             
         @endforeach   
        </select>
        </div>

        <div class="mb-3">
        <label class="form-label">Cost Price</label>
        <input type="number" class="form-control" name="cost_price" value="{{ $product->cost_price }}">
        </div>

        <div class="mb-3">
        <label class="form-label">Selling Price</label>
        <input type="number" class="form-control" name="selling_price" value="{{ $product->selling_price }}">
        </div>

        <button class="btn btn-primary">Update Product</button>

    </form>

    </div>
    </div>
</x-layout>