<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required>
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
    </div>
    <button type="submit">Add Product</button>
</form>
