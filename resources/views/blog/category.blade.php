<x-layout title="All Articles from {{$category->name}} - Sand & Sky">
    <div class="bg-register min-vh-100">
        <div class="container pb-5">
            <h3 class="fw-bold text-uppercase text-center p-5">
                <img src="/images/left.png">All Articles from {{$category->name}} <img src="/images/right.png">
            </h3>
            <div class="row justify-content-center bg-white rounded shadow">
                <div class="blog">
                    <!-- img dx -->
                    @foreach ($blogs as $blog)
                        @if ($loop->iteration % 2 == 1)
                            <div class="row my-5">
                                <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name ?? 'Anonymous'}}</h6>
                                    <h2 class="pb-4">{{$blog->title}}</h2>
                                    <div> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                                    <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-dark text-center mt-3">Show More</a>
                                </div>
                                <div class="col-md-6 order-first order-md-last d-flex justify-content-center">
                                    <img src="{{Storage::url($blog->img)}}" class="img-fluid">
                                </div>
                            </div>
                        @else
                            <div class="row my-5">
                                <div class="col-md-6 order-first order-md-last d-flex justify-content-center">
                                    <img src="{{Storage::url($blog->img)}}" class="img-fluid">
                                </div>
                                <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name ?? 'Anonymous'}}</h6>
                                    <h2 class="pb-4">{{$blog->title}}</h2>

                                    <div> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                                    <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-dark text-center mt-3">Show More</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a href="{{route('blog.index')}}" class="btn btn-outline-dark w-50 mt-5 mb-5">Back To Blog<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</x-layout>
