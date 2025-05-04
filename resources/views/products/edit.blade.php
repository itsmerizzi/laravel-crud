<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($erros->any())
        <ul>
            @foreach ($erros->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="put" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{ $product->price }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{ $product->description }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>