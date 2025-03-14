<x-layout title="Blog - Bloom Beauty">

    <x-header />

    <div class="category-bar">
        <button class="btn">ALL CATEGORY</button>
        <button class="btn">ECOFRIENDLY</button>
        <button class="btn">ORGANIC</button>
        <button class="btn">TIPS</button>
        <button class="btn">COMPILATION</button>
        <button class="btn">INGREDIENTS</button>
        <button class="btn">ANTIAGING</button>
    </div>

    <div class="container min-vh-100 ">
        <div class="blog">
            <!-- img dx -->

            @foreach ($blogs as $blog)
            @if ($loop->iteration % 2 == 1)
            <div class="row my-5">
                <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    <h2 class="pb-4">{{$blog->title}}</h2>
                    <div> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                    <div class="tags">
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
                    
                </div>
                <div class="col-md-6 order-first order-md-last d-flex justify-content-center">
                    <img src="{{Storage::url($blog->img)}}" alt="Coconut">
                </div>
            </div>
            @else
            <div class="row my-5">
                <div class="col-md-6 order-first order-md-last d-flex justify-content-center">
                    <img src="{{Storage::url($blog->img)}}" alt="Coconut">
                </div>
                <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    <h2 class="pb-4">{{$blog->title}}</h2>

                    <div> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>

                    <div class="tags pt-4">
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
                    
                </div>
            </div>
            @endif
            @endforeach
        </div>

        <!-- img sx -->
        <div class="row my-5">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="/images/blog/blog3.png" alt="health" width="600px">
            </div>
            <div class="col-md-6 p-md-5 pt-3 pt-md-0">
                <h6 class="data pb-4">January 12, 2025</h6>
                <h2 class="pb-4">7 Skincare Habits to Break Now</h2>
                <p>Great skincare is a long game—it doesn’t happen overnight, but little steps are made (nightly!) to get and keep your skin at its most radiant state. Today, we are uncovering some of our top small but powerful habits that can make a world of difference with your skin.
                    You do not need to focus on all seven immediately, so take heart. Use this as a checklist. If your skincare has stalled, then it might be time to stop these.</p>
                <div class="tags pt-4">
                    <span class="badge bg-blog">#Tips</span>
                    <span class="badge bg-blog">#EcoFriendly</span>
                    <span class="badge bg-blog">#SkinHealth</span>
                </div>
                
            </div>
        </div>

        <!-- img dx -->
        <div class="row my-5">
            <div class="col-md-6 p-md-5 pt-3 pt-md-0 order-last">
                <h6 class="data pb-4">January 10, 2025</h6>
                <h2 class="pb-4">Getting Your Skin Care Back on Track</h2>
                <p>With so many novel and ever-changing concerns occupying precious brain space lately, you’re forgiven if maintaining a multi-step skincare routine hasn’t been at the top of your list. Add to that list stress, poor sleep and higher sugar or junk food intake, and right now your skin is probably in need of a little (or a major) reset.
                    You’ve come to the right place! To get back into a rhythm with your skincare routine, we’re sharing our favorite “start here” tips below.</p>
                <div class="tags pt-4">
                    <span class="badge bg-blog">#Tips</span>
                    <span class="badge bg-blog">#Ingredients</span>
                    <span class="badge bg-blog">#Compilation</span>
                    <span class="badge bg-blog">#AntiAging</span>
                </div>
                
            </div>
            <div class="col-md-6 order-first order-md-last d-flex justify-content-center">
                <img src="/images/blog/blog4.png" alt="skin" width="600px">
            </div>
        </div>
    </div>

    <div id="load-more-container" class="text-center my-5">
        <button id="load-more" class="btn btn-outline-dark">Show More</button>
    </div>


</x-layout>