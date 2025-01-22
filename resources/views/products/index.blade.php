<x-header />
<div class="relative">
    <img src="{{ asset('storage/images/head.png') }}" alt="Hero Image" class="w-full h-100 object-cover">
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-0 flex justify-center items-center">
    </div>
</div>
<!-- shop by category end -->
<div class="grid grid-cols-[1fr_auto_1fr] items-center ml-4 mr-4 mt-12 mb-12">
    <hr class="h-px bg-gray-200 border-0 dark:bg-orange-900">
    <p class="text-3xl font-medium text-center px-4">Shop By Category</p>
    <hr class="h-px bg-gray-200 border-0 dark:dark:bg-orange-900">
</div>

<div class="overflow-hidden relative">
  <div id="columns" class="grid grid-cols-4 gap-4 transition-transform duration-1000">
    <div class=""><img src="{{ asset('storage/images/915.png') }}" alt="Hero Image" class="w-full h-100 object-cover"></div>
    <div class=""><img src="{{ asset('storage/images/pro1.png') }}" alt="Hero Image" class="w-full h-100 object-cover"></div>
    <div class=""><img src="{{ asset('storage/images/pro2.png') }}" alt="Hero Image" class="w-full h-100 object-cover"></div>
    <div class=""><img src="{{ asset('storage/images/pro3.png') }}" alt="Hero Image" class="w-full h-100 object-cover"></div>
  </div>
<!-- shop by category end -->


<div class="grid grid-cols-[1fr_auto_1fr] items-center ml-4 mr-4 mt-12 mb-8">
    <hr class="h-px bg-gray-200 border-0 dark:bg-orange-900">
    <p class="text-3xl font-medium text-center px-4">Recommended products</p>
    <hr class="h-px bg-gray-200 border-0 dark:dark:bg-orange-900">
</div>

<div class="grid grid-cols-4 gap-4 p-4">
    @foreach ($products as $product)
    <div class="">
  @if ($product->image)
    <div class="w-full aspect-square overflow-hidden ">
      <img src="{{ asset('storage/' . $product->image) }}" 
           alt="{{ $product->name }}" 
           class="w-full h-full object-cover">
    </div>
  @endif
  <h3 class="text-xl font-semibold mt-2">{{ $product->name }}</h3>
  <p class="text-gray-700">{{ $product->description }}</p>
  <p class="text-lg font-bold mt-2">${{ $product->price }}</p>
  <form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <input type="number" name="quantity" value="1" min="1" class="w-full p-2 border rounded mt-2">
    <button type="submit" class="bg-[#8e7c4e] text-white px-4 py-2 rounded mt-2">
      Add to Cart
    </button>
  </form>
</div>
    @endforeach
</div>

<!-- Best seller -->
<div class="grid grid-cols-[1fr_auto_1fr] items-center ml-4 mr-4 mt-12 mb-12">
    <hr class="h-px bg-gray-200 border-0 dark:bg-orange-900">
    <p class="text-3xl font-medium text-center px-4">Best seller product</p>
    <hr class="h-px bg-gray-200 border-0 dark:dark:bg-orange-900">
</div>

<div class="grid grid-cols-5 gap-4 p-4">
  <!-- Left Section: Product Grids -->
  <div class="col-span-3 grid grid-cols-2 gap-4">
    @foreach ($products->take(4) as $product)
      <div class="">
        @if ($product->image)
          <div class="w-full aspect-square overflow-hidden">
            <img src="{{ asset('storage/' . $product->image) }}" 
                 alt="{{ $product->name }}" 
                 class="w-full h-full object-cover">
          </div>
        @endif
        <h3 class="text-xl font-semibold mt-2">{{ $product->name }}</h3>
        <p class="text-gray-700">{{ $product->description }}</p>
        <p class="text-lg font-bold mt-2">${{ $product->price }}</p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
          @csrf
          <input type="number" name="quantity" value="1" min="1" class="w-full p-2 border rounded mt-2">
          <button type="submit" class="bg-[#8e7c4e] text-white px-4 py-2 rounded mt-2">
            Add to Cart
          </button>
        </form>
      </div>
    @endforeach
  </div>

  <!-- Right Section: Single Photo -->
  <div class="col-span-2 flex justify-center items-center">
    <img src="{{ asset('storage/images/915.png') }}" 
         alt="Hero Image" 
         class="w-full h-full object-cover ">
  </div>
</div>


  <div class="grid grid-cols-[1fr_auto_1fr] items-center ml-4 mr-4 mt-12 mb-12">
    <hr class="h-px bg-gray-200 border-0 dark:bg-orange-900">
    <p class="text-3xl font-medium text-center px-4">Highlights</p>
    <hr class="h-px bg-gray-200 border-0 dark:dark:bg-orange-900">
    <div></div>
</div>


<div id="columns" class="grid grid-cols-5 gap-2 transition-transform duration-1000 mb-4 ml-4 mr-4">
  <!-- render picture here -->  
  <img src="{{ asset('storage/images/tuh1.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover">
  <img src="{{ asset('storage/images/tuh2.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh3.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh4.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh5.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh6.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh7.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh8.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh9.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover ">
  <img src="{{ asset('storage/images/tuh10.jpg') }}" alt="Hero Image" class="w-full aspect-square object-cover">
</div>




</div>

<x-footer />