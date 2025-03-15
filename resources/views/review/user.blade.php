<x-layout title="All Reviews from {{$user->name}} - Sand & Sky">
    <div class="bg-register  pb-5 mb-5">
        <div class="container my-4  mb-5">
            <h3 class="fw-bold text-uppercase text-center p-5"><img src="/images/left.png">All Reviews from {{$user->name}} <img src="/images/right.png"></h3>
            <div class="row justify-content-center mb-5 ">
                <div class="col-md-8 bg-white rounded border shadow p-5">
                    @foreach ($reviews as $review)
                    <div class="review-card">
                        <div class="review-header">
                            <i class="bi bi-person-circle pb-4 fs-3"></i>
                            <div>
                                <h6>{{ $review->name}} <span class="text-muted">✔️ Verified Reviewer</span></h6>
                                <p class="review-stars">★★★★★</p>
                            </div>
                        </div>
                        <h5 class="text-uppercase">{{ $review->title}}</h5>
                        <p>{{ $review->comment }}</p>
                        <img src="{{Storage::url($review->img)}}" width="200px">
                        <p class="review-date pt-4">{{$review->created_at}}</p>

                    </div>
                    @endforeach
                    <div class="col-12 text-center ">
                        <a href="#" class="show-more">Show More <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <a href="{{route('homepage')}}" class="btn btn-outline-dark w-50 mt-5">Back To Homepage <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</x-layout>