<x-layout title="{{ $blog->title }} - Bloom Beauty">

    <div class="container pt-2 terms">
        <div class="row justify-content-center pb-5 mb-5">

            <!-- Contenuto principale -->
            <div class="col-md-8">
                <div class="d-flex justify-content-center flex-column mb-5 align-items-center" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <a href="">
                        <img src="{{ Storage::url($blog->img) }}" class="img-fluid">
                    </a>
                </div>
                <hr>
                <div class="p-5">
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    <h2 class="pb-4">{{$blog->title}}</h2>
                    <div class="body-article small"> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                    <div class="pt-4">
                        <h5>SHARE</h5>
                        <i class="bi bi-facebook link-red fs-3 pe-3"></i>
                        <i class="bi bi-instagram link-red fs-3 pe-3"></i>
                        <i class="bi bi-twitter-x link-red fs-3"></i>
                    </div>
                </div>

                <div class="pt-2">
                    <div class="body-article p-3 mb-5">{!! $blog->body !!}</div>
                </div>

                <div class="text-center mb-5">
                    <a href="{{ route('blog.index') }}" class="btn btn-dark text-center link-light">Back to Blog</a>
                </div>
            </div>

            <!-- Sidebar Sticky -->
            <div class="col-md-4 bg-custom">
                <div class="position-sticky pb-5" style="top: 80%">
                    <ul class="list-group shadow">
                        @foreach($latestBlogs as $latest)
                        <li class="list-group-item">
                            <a href="{{ route('blog.show', $latest->id) }}" class="text-decoration-none link-red">
                                {{ $latest->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <h4 class="mt-4">Latest Articles</h4>
                </div>
            </div>

        </div>
    </div>

</x-layout>

