<x-layout>
    <x-slot:title>
        Report
    </x-slot:title>

    <h4 class="mb-3">Inventory Report</h4>

    <div class="card">
    <div class="table-responsive">
    <table class="table table-striped mb-0">
        @if($reports->isEmpty())
            <h3 class="text-center text-muted my-4">
                No report has been created.
            </h3>
        @else
        <thead>
        <tr>
        <th>Product</th>
        <th>Stock In</th>
        <th>Stock Out</th>
        <th>Current Stock</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)

                <tr>

                    <td>{{ $report->name }}</td>

                    <td>{{ $report->total_stock_in ?? 0 }}</td>

                    <td>{{ $report->total_stock_out ?? 0 }}</td>

                    <td>{{ $report->current_stock }}</td>

                </tr>

            @endforeach
            @endif
        </tbody>
    </table>
    </div>
    </div>
    

</x-layout>