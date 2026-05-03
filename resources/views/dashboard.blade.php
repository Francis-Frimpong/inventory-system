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
    @if($recentTransactions->isEmpty())
        <h3 class="text-center text-muted my-4">
            No Transactions has been recorded.
        </h3>
    @else
        <thead>
            <tr>
            <th>Product</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentTransactions as $transaction)
                <tr>
                    <td>{{ $transaction->name }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->quantity }}</td>
                    <td>
                        {{ \Carbon\Carbon::parse($transaction->date)->format('M d, Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif   
    </table>
    </div>
    </div>
</x-layout>
