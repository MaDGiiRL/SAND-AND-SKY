<x-layout title="Write Your Review - Sand & Sky">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center py-5 mb-5">

            <div class="col-12 col-md-6 d-flex justify-content-center p-5 flex-column mb-5 align-items-center" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <img src="/images/287972351_2973397429626063_2680642820534938097_n.png" class="img-fluid">

            </div>

            <div class="col-12 col-md-6 pt-2" data-aos="fade-down"
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
                        <input type="file" class="form-control" name="img">
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>