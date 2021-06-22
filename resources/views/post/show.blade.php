@extends('layouts.app')
@section('content')
    <body>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>

                    <header class="mb-4">
                        <h1 class="fw-bolder mb-1">{{$item->title}}</h1>
                        <div class="text-muted fst-italic mb-2">Posted on {{$item->created_at}}</div>

                    </header>

                    <figure class="mb-4"><img class="img-fluid rounded" src="{{asset('/storage/'.$item->image)}}" alt="..." /></figure>
                    <section class="mb-5">
                         <p>{!! $item->content_raw !!}</p>
                    </section>
                </article>

                Read more!
                <div class="card-group">
                @foreach($rest as $post)
                    <div class="card">
                        <img class="card-img-top" style="width: 250px" src="{{asset('/storage/'.$post->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('post.single',$post->slug)}}"><h5 class="card-title">{{$post->title}}</h5></a>
                            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                        </div>
                    </div>
                @endforeach
                </div>
        </div>
    </div>
    </div>
    </body>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
@endsection
