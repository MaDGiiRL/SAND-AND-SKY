<x-layout title="Blog - Sand & Sky">

    <x-header />

    <div class="container pb-5">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-6 col-md-3 my-3">
                <div class="card">
                    <a href=""> <img src="{{Storage::url($blog->img)}}" class="img-fluid">
                        <div class="card-body">
                            <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="link-red">
                                <h6>{{ Str::limit($blog['title'], 50, '...') }} <i class="bi bi-arrow-right-circle"></i></h6>
                            </a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="category-bar">
        @foreach($categories as $category)
        <a href="{{ route('blog.category', ['categoryId' => $category->id]) }}">
            <button class="btn">{{ $category->name }}</button>
        </a>
        @endforeach
    </div>


    <div class="container">
        <div class="blog">
            <!-- img dx -->
            @foreach ($blogs as $blog)
            @if ($loop->iteration % 2 == 1)
            <div class="row my-5">
                <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                    <div class="d-flex flex-row">
                        <p class="small">{{$blog->created_at->format('d F, Y')}} by </p> <a href="{{route('blog.user' , $blog->user->id)}}">
                            @if ($blog->user)
                            <h6 class="pb-4 ps-1 link-red"> {{$blog->user->name}}</h6>
                            @else
                            User Deleted
                            @endif
                        </a>
                    </div>

                    <h2 class="py-4">{{$blog->title}}</h2>
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
                    <div class="d-flex flex-row">
                        <p class="small">{{$blog->created_at->format('d F, Y')}} by </p> <a href="{{route('blog.user' , $blog->user->id)}}">
                            @if ($blog->user)
                            <h6 class="pb-4 ps-1 link-red"> {{$blog->user->name}}</h6>
                            @else
                            User Deleted
                            @endif
                        </a>
                    </div>

                    <h2 class="py-4">{{$blog->title}}</h2>

                    <div> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                    <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-dark text-center mt-3">Show More</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <div class="pagination-container d-flex justify-content-center mb-5">
        {{ $blogs->links() }}
    </div>

    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif




    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function() {
                let page = {
                    {
                        $blogs - > currentPage()
                    }
                } + 1;
                let url = "{{ route('blog.index') }}?page=" + page;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        $('#blog-container').append(data);
                        if (!data.hasMorePages) {
                            $('#load-more').hide();
                        }
                    }
                });
            });
        });
    </script>

</x-layout>