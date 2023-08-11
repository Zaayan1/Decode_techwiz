    @extends('header-footer')
    @section('body')
    <link rel="stylesheet" href="assests/css/accesories.css">
    <script src="assests/js/products.js"></script>
    <style>
      
    </style>



    <div class="hero overlay" style="background-image: url('assests/images/bg_3.jpg'); height:600px!important;" >
          <div class="container" style="height:500px!important;">
            <div class="row align-items-center">
              <div class="col-lg-5 ml-auto">
                <h1 class="text-white">World Cup Event</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                <div id="date-countdown"></div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="category-buttons" style="position:relative!important;">
      <button class="category-button" onclick="filterProducts('all')">All</button>
      <button class="category-button" onclick="filterProducts('men')">Men</button>
      <button class="category-button" onclick="filterProducts('women')">Women</button>
      <button class="category-button" onclick="filterProducts('kids')">Kids</button>
    </div> 
        
    <div class="card-container" id="productCardContainer">
      @foreach ($products as $product)
      <div class="product-card">
          <img class="product-image" src="{{ asset($product->image) }}" alt="Product Image">
          <h2 class="product-title">{{ $product->name }}</h2>
          <p class="product-price">${{ $product->price }}</p>
          <button class="add-to-cart-button" onclick="openModal({{ $product->price }})">Add to Cart</button>
          <button class="wishlist-button"><span class="heart-icon">❤️</span> Add to Wishlist</button>
      </div>
      @endforeach
  </div>

    <!-- Modal -->
    <div id="cartModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>

        <img class="modal-product-image" src="{{ asset($product->image) }}" alt="Product Image">
        <h2 class="modal-product-title" style="color:black!important;"></h2>
        <p class="modal-product-price"></p>
       
         <!-- Placeholder for the price -->
        <div class="quantity-container">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice(229)">
        </div>
        <p class="total-price">Total Price: $XX.XX</p>
        <button class="buy-now-button" onclick="buyNow()">Buy Now</button>
      </div>
    </div>


    @endsection
