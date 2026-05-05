<x-layout>
    <x-slot:title>
        Products
    </x-slot:title>

    <div class="d-flex justify-content-between align-items-center mb-3">
<h4>Products</h4>
<a class="btn btn-primary" href="{{ route('products.addproducts') }}">Add Product</a>
</div>

<div class="card">
<div class="table-responsive">
<table class="table table-striped mb-0">
      @if($products->isEmpty())
        <h3 class="text-center text-muted my-4">
            No product has been added.
        </h3>
    @else
        <thead>
            <tr>
            <th>Name</th>
            <th>SKU</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{  optional($product->category)->name ?? 'No Category' }}</td>
                    <td>{{ $product->selling_price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif   

</table>
</div>
</div>
</x-layout>