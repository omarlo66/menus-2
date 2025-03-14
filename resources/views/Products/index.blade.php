
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="container bg-dark text-light">
    <h1>Products</h1>
    <h2>Products List</h2>
    <a href="{{route('products.create')}}">Add Product</a>
    @foreach ($products as $product)
    <div>
        <h2>{{$product->product_name}}</h2>
        <p>{{$product->price}}</p>
        <p>{{$product->discount}}</p>
        <p>{{$product->category_id}}</p>
        <img src="{{asset('storage/images/'.$product->image)}}" alt="{{$product->product_name}}">
    </div>
    @endforeach
</body>
</html>