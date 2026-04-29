<x-layout>
    <x-slot:title>
        Stock Out
    </x-slot:title>

    <h4 class="mb-3">Stock Out</h4>

    <div class="card">
    <div class="card-body">

    <form>

    <div class="mb-3">
    <label class="form-label">Product</label>
    <select class="form-select">
    <option>Rice</option>
    </select>
    </div>

    <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" class="form-control">
    </div>

    <div class="mb-3">
    <label class="form-label">Selling Price</label>
    <input type="number" class="form-control">
    </div>

    <button class="btn btn-danger">Record Sale</button>

    </form>

    </div>
    </div>
    

</x-layout>