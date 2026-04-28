<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventory Dashboard</title>
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
<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="#">Products</a></li>
<li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
<li class="nav-item"><a class="nav-link" href="#">Stock In</a></li>
<li class="nav-item"><a class="nav-link" href="#">Stock Out</a></li>
<li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
</ul>
</div>
</div>
</nav>

<div class="container py-4">

<div class="row g-3">

<div class="col-6 col-md-3">
<div class="card text-bg-primary">
<div class="card-body">
<h6>Total Products</h6>
<h3>120</h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-success">
<div class="card-body">
<h6>Stock In</h6>
<h3>340</h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-warning">
<div class="card-body">
<h6>Stock Out</h6>
<h3>210</h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-danger">
<div class="card-body">
<h6>Low Stock</h6>
<h3>5</h3>
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

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>