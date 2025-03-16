<x-layout title="{{ $blog->title }} - Sand & Sky">

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
                    @if ($blog->user)
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    @else
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by User Deleted</h6>
                    @endif
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


                <div class="card-body p-4">
                    <h4 class="text-center mb-4 pb-2">Comments on {{ $blog->title }} </h4>
                    <div class="row">

                        <form method="POST" action="{{route('comment.store')}}">
                            @csrf
                            <input type="text" name="body" class="form-control pb-5 p-3" placeholder="Enter your comment...">
                            <input type="text" value="{{$blog->id}}" name="blog_id" class="d-none">
                            <button type="submit" class="btn btn-outline-custom mt-3">Send Comment</button>
                        </form>

                        <div class="col-12">
                            @foreach ($blog->comments as $comment)
                            <div class="shadow border roudend p-5 comment-card my-3">
                                <div class="comment-header">
                                    <div>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="bi bi-person-circle  fs-3 me-2 pb-2"></i>
                                            <a href="" class="link-red">
                                                <h6>{{ $comment->user->name}}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <p>{{ $comment->body}}</p>
                                <p class="comment-date">{{$comment->created_at}}</p>
                            </div>
                            @endforeach
                        </div>


                    </div>



                </div>

            </div>

            <!-- Sidebar Sticky -->
            <div class="col-md-4 bg-custom">
                <div class="position-sticky pb-5" style="top: 80%">
                    <h4 class="mt-4">Latest Articles</h4>
                    <ul class="list-group shadow">
                        @foreach($latestBlogs as $latest)
                        <li class="list-group-item">
                            <a href="{{ route('blog.show', $latest->id) }}" class="text-decoration-none link-red">
                                {{ $latest->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <style>
        .form-color {

            background-color: #fafafa;

        }

        .form-control {

            height: 48px;
            border-radius: 25px;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #35b69f;
            outline: 0;
            box-shadow: none;
            text-indent: 10px;
        }

        .c-badge {
            background-color: #35b69f;
            color: white;
            height: 20px;
            font-size: 11px;
            width: 92px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2px;
        }

        .comment-text {
            font-size: 13px;
        }

        .wish {

            color: #35b69f;
        }


        .user-feed {

            font-size: 14px;
            margin-top: 12px;
        }
    </style>
</x-layout>