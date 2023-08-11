@extends('header-footer')
@section('body')
<style>
    .site-navbar{
  position:relative!important;
}
</style>
<div class="container" style="margin-top:80px;">
    <h2>Add a New Product</h2>
    <form class="add-product-form" action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Add Product</button>
    </form>
</div>
@endsection
