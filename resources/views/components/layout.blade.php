<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ isset($title) ? $title : 'Inventory' }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<div class="container-fluid">
<a class="navbar-brand" href="#">Inventory System</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('stockin') }}">Stock In</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('stockout') }}">Stock Out</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('reports') }}">Reports</a></li>
</ul>
</div>
</div>
</nav>

<div class="container py-4">

    {{ $slot }}

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>