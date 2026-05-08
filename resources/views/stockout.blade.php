<x-layout>
    <x-slot:title>
        Stock Out
    </x-slot:title>

    <h4 class="mb-3">Stock Out</h4>

    <div class="card">
    <div class="card-body">

    <form method="POST" action="{{ route('stockout.store') }}">
        @csrf
    <div class="mb-3">
    <label class="form-label">Product</label>
    <select class="form-select" name="product_id">
        @foreach ($products as $product)

            <option value="{{ $product->id }}">{{ $product->name }}</option>
    
        @endforeach
    </select>
    </div>

    <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" class="form-control" name="quantity">
    </div>

    <div class="mb-3">
    <label class="form-label">Selling Price</label>
    <input type="number" class="form-control" name="selling_price">
    </div>

    <button class="btn btn-danger">Record Sale</button>

    </form>

    </div>
    </div>
    

</x-layout>