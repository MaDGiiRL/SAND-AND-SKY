<x-layout title="Write Your Article - Bloom Beauty">
    <div class="bg-register">
        <div class="container pt-5 ">
            <div class="row justify-content-center py-5 mb-5">
                <div class="col-12 col-md-6 pt-2" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h2 class="fw-bold pt-5">Write your <em>article</em>.</h2>
                    <!-- form -->
                    <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="Title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <textarea name="body" cols="30" rows="12" class="form-control @error('body') is-invalid @enderror" placeholder="Your Article">{{old('article')}}</textarea>
                            @error('body')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <!-- <div class="my-3">
                            <label class="form-label">Categories</label>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="tips" id="tips" name="cat_1">
                                <label class="form-check-label" for="tips">
                                    Tips
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="antiaging" id="antiaging" name="cat_2">
                                <label class="form-check-label" for="antiaging">
                                    AntiAging
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="ecoFriendly" id="ecoFriendly" name="cat_3">
                                <label class="form-check-label" for="ecoFriendly">
                                    EcoFriendly
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="organic" id="organic" name="categories[]">
                                <label class="form-check-label" for="organic">
                                    Organic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="skinHealth" id="skinHealth" name="categories[]">
                                <label class="form-check-label" for="skinHealth">
                                    Skin Health
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="ingredients" id="ingredients" name="categories[]">
                                <label class="form-check-label" for="ingredients">
                                    Ingredients
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('categories') is-invalid @enderror" type="checkbox" value="mixedGreens" id="mixedGreens" name="categories[]">
                                <label class="form-check-label" for="mixedGreens">
                                    Mixed Greens
                                </label>
                            </div>
                        </div> -->
                        <div class="my-3">
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="alert alert-warning" role="alert">
                            Please review your article carefully before submitting. Once submitted, it will be visible to others.
                        </div>
                        <button type="submit" class="btn btn-custom w-100 mt-2">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
