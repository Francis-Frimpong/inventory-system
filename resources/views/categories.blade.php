<x-layout>
    <x-slot:title>
        Categories
    </x-slot:title>

    <h4 class="mb-3">Categories</h4>
    <div class="card mb-4">
    <div class="card-body">
        <form class="row g-2" method="POST" action="/categories">
                @csrf
    <div class="col-12 col-md-8">
    <input type="text" class="form-control" placeholder="Category name" name="name">
    </div>
    <div class="col-12 col-md-4">
    <button class="btn btn-primary w-100">Add Category</button>
    </div>
    </form>
    </div>
    </div>

    <div class="card">
    <table class="table mb-0">

    @if($categories->isEmpty())
        <h3 class="text-center text-muted my-4">
            No category added.
        </h3>
    @else
        <thead>
            <tr>
            <th>Name</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                    <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                   
                </tr>
            @endforeach
        </tbody>
    @endif   
   
    </table>
    </div>

    

</x-layout>