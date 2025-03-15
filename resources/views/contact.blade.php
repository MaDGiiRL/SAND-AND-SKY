<x-layout title="Contact Us - Sand & Sky">
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
                <h2 class="fw-bold pt-5">Write your <em>message</em>.</h2>
                <p class="small">We will respond soon and try to help you figuring out a solution for your problem! ♡</p>
                <!-- form -->
                <form method="POST" action="{{route('contact.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Your Name">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Your Email">
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea name="body" cols="30" rows="4" class="form-control" placeholder="Your Message..">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" name="file">
                    </div>

                    <button type="submit" class="btn btn-outline-custom w-100 mt-4">Submit Message</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message')}}
                </div>
                @endif

            </div>
        </div>
    </div>

</x-layout>