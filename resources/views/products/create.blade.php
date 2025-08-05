<h2>Add Product</h2>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Product name" required><br>
    <input type="file" name="image" required><br>
    <button type="submit">Upload</button>
</form>
