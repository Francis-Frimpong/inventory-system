<x-layout>
    <x-slot:title>
        Add Product
    </x-slot:title>

    <div class="card">
    <div class="card-header">Add Product</div>
    <div class="card-body">

    <form method="POST" action="/addproducts">
        @csrf

        <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" class="form-control" name="sku">
        </div>

        <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-select" name="category_id">
         @foreach ( $categories as $category )

            <option value={{ $category->id }}>{{ $category->name }}</option>
             
         @endforeach   
        </select>
        </div>

        <div class="mb-3">
        <label class="form-label">Cost Price</label>
        <input type="number" class="form-control" name="cost_price">
        </div>

        <div class="mb-3">
        <label class="form-label">Selling Price</label>
        <input type="number" class="form-control" name="selling_price">
        </div>

        <button class="btn btn-primary">Save Product</button>

    </form>

    </div>
    </div>
</x-layout>