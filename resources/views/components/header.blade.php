@if(Route::currentRouteName() == "homepage")
<div class="bg-first">
    <div class="container header">
        <div class="row pt-5">
            <div class="col-md-6  pt-5">
                <h1 class="pt-5 mt-4">Bringing A-Beauty to the world</h1>

                <p class="pt-3">
                    Embrace our uniquely Aussie approach to skincare. It's simple.
                </p>

                <div class="text-center"><a href="{{route('all')}}" class="btn btn-outline-light fs-2 mt-3">Shop Now</a></div>
            </div>
        </div>
    </div>
</div>
@elseif (Route::currentRouteName() == "blog.index")
<div class="header-2">
    <div class="row">
        <img src="/images/banner-desktop-apc_a70c9abf-8381-47f4-9be5-8dfcaf0f1e6e_1920x_crop_center.webp" width="100%">
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class=" pt-5 d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="pt-1 text-center">Join the Conversation!<br>
                        Share Your Voice with Us!</h1>
                    @auth
                    <a href="{{route('blog.create')}}">
                        <p class="link-article text-center">Click here to create a new article <i class="bi bi-arrow-right"></i></p>
                    </a>
                    @endauth

                    <p class="lead pt-1 text-center">
                        <strong>Have something to say?</strong> We invite you to share your thoughts, ideas, and expertise with the world by writing articles for our platform! Whether you're passionate about technology, lifestyle, health, or any other topic, your voice matters.
                    </p>

                    @guest
                    <a href="{{route('register')}}" class="btn btn-dark mt-3">Register</a> <a href="{{route('login')}}" class="btn btn-outline-dark mt-3">Login</a>
                    @endguest
                </div>
            </div>
        </div>

    </div>

</div>
@endif