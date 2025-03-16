<x-layout title="Write Your Article - Sand & Sky">
    <div class="bg-register min-vh-100">
        <div class="container pt-5 ">
            <div class="row justify-content-center">
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
                            <textarea name="body" cols="30" rows="12" class="form-control @error('body') is-invalid @enderror" placeholder="Your Article">{{old('body')}}</textarea>
                            @error('body')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <select name="category_id" id="" class="form-control">
                                <option disabled selected>Choose a category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="my-3">
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="alert alert-warning" role="alert">
                            Please review your article carefully before submitting. Once submitted, it will be visible to others.
                        </div>
                        <button type="submit" class="btn btn-dark w-100 mt-2">Submit Article</button>
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
    </div>
</x-layout>


 

