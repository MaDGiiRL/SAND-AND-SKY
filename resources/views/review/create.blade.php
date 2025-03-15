<x-layout title="Write Your Review - Sand & Sky">
    <style>
        .row-custom {
            --bs-gutter-x: 7rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1* var(--bs-gutter-y));
            margin-right: calc(-.5* var(--bs-gutter-x));
            margin-left: calc(-.5* var(--bs-gutter-x));
        }
    </style>
    <div class="bg-register">
        <div class="container pt-5 mt-5">
            <div class="row-custom bg-white  border shadow justify-content-center overflow-hidden px-5">

                <div class="col-12 col-md-6 d-flex justify-content-center p-5 flex-column  align-items-center pt-5" data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <img src="/images/287972351_2973397429626063_2680642820534938097_n.png" class="img-fluid rounded-pill" width="98%">

                </div>

                <div class="col-12 col-md-5 pt-2" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h2 class="fw-bold pt-5">Write your <em>review</em>.</h2>
                    <p class="small">Share your thoughts on us! Your review helps us improve even more. ♡</p>
                    <!-- form -->
                    <form method="POST" action="{{route('review.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Your Name">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="Title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <textarea name="comment" cols="30" rows="4" class="form-control" placeholder="Your Comment">{{old('comment')}}</textarea>
                            @error('comment')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="file" class="form-control"name="img">
                        </div>

                        <div class="mb-3">
                            <select name="rating" class="form-control @error('rating') is-invalid @enderror">
                                <option value="" disabled selected>Rate Us ★</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{$i}}">{{$i}} ★</option>
                                    @endfor
                            </select>
                            @error('rating')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-outline-custom w-100 mt-4">Submit Review</button>
                    </form>
                    @if (session('message'))
                    <div class="alert alert-success mt-5">
                        {{ session('message')}}
                    </div>
                    @endif

                </div>
            </div>
        </div>


        <div class="container pb-5">
            <div class="row py-5">
                @foreach($blogs as $blog)
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href=""> <img src="{{Storage::url($blog->img)}}" class="img-fluid">
                            <div class="card-body">
                                <a href="" class="link-red">
                                    <h6>{{ Str::limit($blog['title'], 50, '...') }} <i class="bi bi-arrow-right-circle"></i></h6>
                                </a>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>