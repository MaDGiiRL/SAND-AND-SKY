<x-layout title="Shop All - Sand & Sky">
    <div class="container mt-4 min-vh-100">
        <div class="row">
            <aside class="col-md-3 filter-section">
                <form id="filterForm">
                    <h4>Product</h4>
                    @foreach ($categories as $category)
                    @php
                    $categoryId = Str::slug($category, '_');
                    @endphp
                    <div class="form-check">
                        <input class="form-check-input filter-type" type="checkbox" value="{{ strtolower($category) }}" id="{{ $categoryId }}">
                        <label class="form-check-label" for="{{ $categoryId }}">{{ ucfirst($category) }}</label>
                    </div>
                    @endforeach

                    <h5 class="mt-3">Price</h5>
                    <div class="form-check">
                        <input class="form-check-input filter-price" type="checkbox" value="under-25" id="under-25">
                        <label class="form-check-label" for="under-25">Sotto i 25$</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-price" type="checkbox" value="25-50" id="25-50">
                        <label class="form-check-label" for="25-50">$25 - $50</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-price" type="checkbox" value="50-100" id="50-100">
                        <label class="form-check-label" for="50-100">$50 - $100</label>
                    </div>
                    <button class="btn btn-primary mt-3" id="apply-filters">Apply</button>
                </form>
            </aside>


            <main class="col-md-9">
                <div class="row" id="product-list">
                    @foreach ($products as $product)
                    <div class="col-6 col-md-4 my-3"">
                        <div class=" card position-relative">
                        @if (!empty($product['discount']))
                        <span class="discount-badge">-{{ $product['discount'] }}%</span>
                        @endif
                        <div class="container-wrap">
                            <a href="{{route('details', ['id' => $product['id'], 'name' => $product['name'] ])}}">
                                <img src="{{ $product['image'] }}" class="image" alt="{{ $product['name'] }}">
                                <img src="{{ $product['image_hover'] }}" class="hover-image" alt="Hover Image">
                            </a>
                        </div>


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


    <script>
        document.getElementById('apply-filters').addEventListener('click', function(event) {
            event.preventDefault();

            let selectedCategories = [];
            document.querySelectorAll('.filter-type:checked').forEach(el => selectedCategories.push(el.value));

            let selectedPrices = [];
            document.querySelectorAll('.filter-price:checked').forEach(el => selectedPrices.push(el.value));

            fetch("{{ route('filtered.products') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        categories: selectedCategories,
                        prices: selectedPrices
                    })
                })
                .then(response => response.json())
                .then(data => {
                    let productList = document.getElementById('product-list');
                    productList.innerHTML = ""; // Svuota i prodotti esistenti

                    if (data.length === 0) {
                        productList.innerHTML = `<p class="text-center">Nessun prodotto trovato.</p>`;
                    } else {
                        data.forEach(product => {
                            let discountBadge = product.discount ? `<span class="discount-badge">-${product.discount}%</span>` : "";
                            productList.innerHTML += `
                <div class="col-6 col-md-4 my-3">
                    <div class="card position-relative">
                        ${discountBadge}
                        <a href="/details/${product.id}/${product.name}">
                            <img src="${product.image}" class="card-img-top img-fluid" alt="${product.name}">
                        </a>
                        <div class="card-body">
                            <a href="/details/${product.id}/${product.name}">
                                <h6 class="card-title">${product.name}</h6>
                            </a>
                            <div class="stars">★★★★★ (5)</div>
                            <p class="card-text">${product.type}</p>
                            <p class="price">$${product.price}</p>
                            <button class="btn-add">Add To Bag</button>
                        </div>
                    </div>
                </div>`;
                        });
                    }
                })
                .catch(error => console.error('Errore:', error));
        });
    </script>

</x-layout>