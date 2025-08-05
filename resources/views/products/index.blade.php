<h2>All Products</h2>
@foreach($products as $product)
    <p>{{ $product->name }}</p>
    <img src="{{ asset('uploads/' . $product->image) }}" width="150"><hr>
@endforeach
