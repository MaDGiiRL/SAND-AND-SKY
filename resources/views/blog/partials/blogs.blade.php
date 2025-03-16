@foreach($blogs as $blog)
<div class="col-6 col-md-3 my-3">
    <div class="card">
        <a href="">
            <a href=""><span class="cat-badge">{{$blog->category->name}}</span></a>
            <img src="{{ Storage::url($blog->img) }}" class="img-fluid">
            <div class="card-body">
                <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="link-red">
                    <h6>{{ Str::limit($blog->title, 50, '...') }} <i class="bi bi-arrow-right-circle"></i></h6>
                </a>
            </div>
        </a>
    </div>
</div>
@endforeach