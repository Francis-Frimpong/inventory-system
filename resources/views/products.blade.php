<x-layout>
    <x-slot:title>
        Products
    </x-slot:title>

    <div class="d-flex justify-content-between align-items-center mb-3">
<h4>Products</h4>
<a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
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
                    <td> {{ $product->stockins->sum('quantity') }}</td>
                   <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}">
                            Edit
                        </a>

                        <form method="POST" 
                            action="{{ route('products.destroy', $product->id) }}" 
                            class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif   

</table>
</div>
</div>
</x-layout>