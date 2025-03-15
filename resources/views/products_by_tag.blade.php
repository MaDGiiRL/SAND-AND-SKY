<x-layout title="Prodotti con tag {{ ucfirst($tag) }}">
    <div class="container mt-4">
        <h2 class="text-center">Prodotti con il tag: #{{ ucfirst($tag) }}</h2>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-6 col-md-4 my-3">
                <div class="card position-relative">
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
                        <p class="card-text">{{ $product['type'] }}</p>
                        <p class="price">${{ $product['price'] }}</p>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Nessun prodotto trovato con questo tag.</p>
            @endforelse
        </div>
    </div>
</x-layout>