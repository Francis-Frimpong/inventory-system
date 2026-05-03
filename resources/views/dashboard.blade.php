<x-layout>
    <x-slot:title>
        Inventory Dashboard
    </x-slot:title>
    <div class="row g-3">

    <div class="col-6 col-md-3">
    <div class="card text-bg-primary">
    <div class="card-body">
    <h6>Total Products</h6>
    <h3>{{ $totalProduct }}</h3>
    </div>
    </div>
    </div>

    <div class="col-6 col-md-3">
    <div class="card text-bg-success">
    <div class="card-body">
    <h6>Stock In</h6>
    <h3>{{$totalStockIn}}</h3>
    </div>
    </div>
    </div>

    <div class="col-6 col-md-3">
    <div class="card text-bg-warning">
    <div class="card-body">
    <h6>Stock Out</h6>
    <h3>{{$totalStockOut}}</h3>
    </div>
    </div>
    </div>

    <div class="col-6 col-md-3">
    <div class="card text-bg-danger">
    <div class="card-body">
    <h6>Low Stock</h6>
    <h3>{{$lowStockProducts}}</h3>
    </div>
    </div>
    </div>

    </div>

    <div class="card mt-4">
    <div class="card-header">Recent Transactions</div>
    <div class="table-responsive">
    <table class="table table-striped mb-0">
    <thead>
    <tr>
    <th>Product</th>
    <th>Type</th>
    <th>Quantity</th>
    <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Rice</td>
    <td>Stock In</td>
    <td>50</td>
    <td>2026-03-01</td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
</x-layout>
