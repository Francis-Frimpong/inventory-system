<x-layout>
    <x-slot:title>
        Stock In
    </x-slot:title>

    <h4 class="mb-3">Stock In</h4>

    <div class="card">
    <div class="card-body">

    <form method="POST" action="{{ route('stockin.store')}}">

    <div class="mb-3">
    <label class="form-label">Product</label>
    <select class="form-select">
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{$product->name}}</option> 
        @endforeach
    </select>
    </div>

    <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" class="form-control">
    </div>

    <div class="mb-3">
    <label class="form-label">Purchase Price</label>
    <input type="number" class="form-control">
    </div>

    <div class="mb-3">
    <label class="form-label">Supplier</label>
    <input type="text" class="form-control">
    </div>

    <button class="btn btn-success">Record Stock</button>

    </form>

    </div>
    </div>

</x-layout>