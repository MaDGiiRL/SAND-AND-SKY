<x-layout title="Homepage - Bloom Beauty">
    <!-- details product -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="position-relative">
                    @if (!empty($product['discount']))
                    <span class="discount-badge">-{{ $product['discount'] }}%</span>
                    @endif
                    <img src="{{ $product['image'] }}" alt="Product Image" class="product-img">
                </div>
            </div>
            <div class="col-md-6 pt-1">

                <h2>{{ $product['name'] }}</h2>
                <p class="rating-stars">★★★★★ <span class="text-muted">(3 reviews)</span></p>

                <p>{{ $product['desc'] }}</p>

                @if (!empty($product['tags']))
                <div class="tags py-4">
                    @foreach ($product['tags'] as $tag)
                    <ul>
                        <li><i class="bi bi-check-lg link-pink fs-4 fw-bold"></i> {{ $tag }}</li>
                    </ul>
                    @endforeach
                </div>
                @endif

                <!-- 
                @if (!empty($product['tags']))
                <div class="tags py-4">
                    @foreach ($product['tags'] as $tag)
                    <a href="{{ route('products.byTag', ['tag' => strtolower($tag)]) }}" class="badge shop-badge">
                        {{ $tag }}
                    </a>
                    @endforeach
                </div>
                @endif

                   -->
                <h3 class="text-black">$ {{ $product['price'] }}</h3>
                <button class="btn btn-custom-details">Add to Cart</button>
                <div class="accordion mt-4" id="productAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ingredients
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                <p class="small text-uppercase">{{ $product['accordion_1'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How To Use
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#productAccordion">
                            <div class="accordion-body">

                                {{ $product['accordion_2'] }}

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What Makes It Good
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#productAccordion">
                            <div class="accordion-body">
                                {{ $product['accordion_3'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/images/SS_Web_Mix_Mask_Desktop_940x.webp"
            class="img-fluid mt-5">
        </div>
    </div>
    <!-- best sellers -->
    <div class="container text-center my-md-5">
        <h3 class="fw-bold text-uppercase"><img src="/images/left.png">Best Sellers<img src="/images/right.png"></h3>
        <a href="{{route ('all')}}" class="see-all">see all</a>
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Pannello 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6 col-md-3 my-3">
                            <div class="card">
                                @if (!empty($product['discount']))
                                <span class="discount-badge">-{{ $product['discount'] }}%</span>
                                @endif
                                <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}"><img src="{{ $product['image'] }}" class="card-img-top img-fluid" alt="{{ $product['name'] }}"></a>
                                <div class="card-body">
                                    <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}">
                                        <h6 class="card-title">{{ $product['name'] }}</h6>
                                    </a>
                                    <div class="stars">★★★★★ (5)</div>
                                    <p class="card-text">{{ $product['type'] }}</p>
                                    <p class="price">${{ $product['price'] }}</p>
                                    <button class="btn-add">Add To Bag</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pannello 2 -->
                <div class="carousel-item">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6 col-md-3 my-3">
                            <div class="card">
                                <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}"><img src="{{ $product['image'] }}" class="card-img-top img-fluid" alt="{{ $product['name'] }}"></a>
                                <div class="card-body">
                                    <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}">
                                        <h6 class="card-title">{{ $product['name'] }}</h6>
                                    </a>
                                    <div class="stars">★★★★★ (5)</div>
                                    <p class="card-text">{{ $product['type'] }}</p>
                                    <p class="price">${{ $product['price'] }}</p>
                                    <button class="btn-add">Add To Bag</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</x-layout>