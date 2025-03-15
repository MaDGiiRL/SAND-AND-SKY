<x-layout title="All Reviews from {{$user->name}} - Sand & Sky">
    <div class="bg-register min-vh-100">
        <div class="container">
            <h3 class="fw-bold text-uppercase text-center p-5"><img src="/images/left.png">All Reviews from {{$user->name}} <img src="/images/right.png"></h3>
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white rounded border shadow p-5">
                    @foreach ($reviews as $review)
                    <div class="review-card">
                        <div class="review-header">

                            <div>
                                <div class="d-flex flex-row align-items-center">
                                    <i class="bi bi-person-circle  fs-3 me-2 pb-2"></i>
                                    <a href="{{route('review.user' , $review->user->id)}}" class="link-red">
                                        <h6>{{ $review->user->name}}</h6>
                                    </a>
                                </div>
                                <span class="text-muted">✔️ Verified Reviewer</span>
                                <p class="review-stars">★★★★★</p>
                            </div>
                        </div>
                        <h5 class="text-uppercase">{{ $review->title}}</h5>
                        <p>{{ $review->comment }}</p>
                        @if ($review->img)
                        <img src="{{ Storage::url($review->img) }}" width="200px">
                        @endif
                        <p class="review-date pt-4">{{$review->created_at}}</p>

                    </div>
                    @endforeach
                </div>
                <a href="{{route('all')}}" class="btn btn-outline-dark w-50 mt-5">Back To Shop <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</x-layout>