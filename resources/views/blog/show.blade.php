<x-layout title="{{ $blog->title }} - Bloom Beauty">
    <div class="bg-register">
        <div class="container pt-2  terms">
            <div class="row justify-content-center pb-5 mb-5">
                <div class="col-5 d-flex justify-content-center flex-column mb-5 align-items-center" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <a href="{{route('review.create')}}">
                        <img src="{{ Storage::url($blog->img) }}" class="img-fluid"></a>
                </div>
                <div class="col-6 p-5">
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    <h2 class="pb-4">{{$blog->title}}</h2>
                    <div class="body-article"> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                    <div class="tags pt-4">
                        <h5>TAGS</h5>
                        @if(!empty($blog->cat_1))
                        <span class="badge bg-blog">#{{$blog->cat_1}}</span>
                        @endif
                        @if(!empty($blog->cat_2))
                        <span class="badge bg-blog">#{{$blog->cat_2}}</span>
                        @endif
                        @if(!empty($blog->cat_3))
                        <span class="badge bg-blog">#{{$blog->cat_3}}</span>
                        @endif
                        @if(!empty($blog->cat_4))
                        <span class="badge bg-blog">#{{$blog->cat_4}}</span>
                        @endif
                    </div>
                    <div class="pt-4">
                        <h5>SHARE</h5>
                        <i class="bi bi-facebook link-pink fs-3 pe-3"></i> <i class="bi bi-instagram link-pink fs-3 pe-3"></i> <i class="bi bi-twitter-x link-pink fs-3"></i>
                    </div>
                </div>
                <div class="col-11 col-md-8 pt-2 bg-white shadow border rounded" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="body-article  p-3 mb-5">{!! $blog->body !!}</div>

                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <a href="{{ route('blog.index') }}" class="btn btn-dark text-center link-light">Back to Blog</a>
        </div>


        <div class="container my-5 py-5 comments">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card comments">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">Comments on {{ $blog->title }} </h4>
                            <div class="row">

                                <form method="POST" action="{{route('comment.store')}}">
                                    @csrf
                                    <input type="text" name="body" class="form-control pb-5" placeholder="Enter your comment...">
                                    <input type="text" value="{{$blog->id}}" name="blog_id" class="d-none">
                                    <button type="submit" class="btn btn-custom mt-3">Send Comment</button>
                                </form>

                                <div class="col">
                                    <div class="d-flex flex-start">
                                        @foreach ($blog->comments as $comment)
                                        <div class="row d-flex align-items-start mt-4">
                                            <!-- Immagine del profilo -->
                                            <div class="col-auto">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                    src="/images/user-default.png" alt="avatar" width="80" height="80" style="position:relative; top: 40px" />
                                            </div>

                                            <!-- Corpo del commento -->
                                            <div class="col-12">
                                                <div class="bg-light p-3 rounded">
                                                    <p class="mb-1 fw-bold" style="position:relative; left: 70px">{{ $comment->user->name }} <span class="small text-muted">- {{ $comment->created_at }}</span></p>
                                                    <p class="mb-0">{{ $comment->body }}</p>
                                                </div>
                                            </div>
                                            <!-- Sezione Like e Commenta -->
                                            <div class="mt-2 d-flex align-items-center">
                                                <!-- Pulsante Like -->
                                                <form action="{{ route('comment.like', $comment->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-decoration-none link-pink d-flex align-items-center">
                                                        <i class="bi bi-star pb-1 pe-1"></i>
                                                        <p class="mb-0">Like ({{ $comment->likes }})</p>
                                                    </button>
                                                </form>

                                                <!-- Pulsante "Commenta" 
                                                <a href="javascript:void(0);" class="text-decoration-none link-pink ms-3 comment-toggle pb-3" data-id="{{$comment->id}}">
                                                    Commenta
                                                </a>
                                                -->
                                            </div>

                                            <!-- Form di risposta nascosto -->
                                            <div class="comment-form mt-1" id="comment-form-{{$comment->id}}" style="display: none;">
                                                <form action="{{ route('comment.reply', $comment->id) }}" method="POST" class="d-flex align-items-start">
                                                    @csrf
                                                    <div class="col-auto">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                            src="/images/user-default.png" alt="avatar" width="40" height="40" />
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="body" class="form-control" placeholder="Scrivi un commento..." required>
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary ms-2">Invia</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <x-on_blog />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".comment-toggle").forEach(button => {
                button.addEventListener("click", function() {
                    let commentId = this.getAttribute("data-id");
                    let form = document.getElementById(`comment-form-${commentId}`);

                    form.style.display = (form.style.display === "none") ? "block" : "none";
                });
            });
        });
    </script>
</x-layout>