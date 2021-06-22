@extends('layouts.app')
@section('content')
    <body>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured post post-->
                @foreach($paginator as $paginate)
                <div class="card mb-4">
                    <a href="{{route('post.single',$paginate->slug)}}"><img class="card-img-top" src="{{asset('/storage/'.$paginate->image)}}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$paginate->created_at}}</div>
                        <h2 class="card-title">{{$paginate->title}}</h2>
                        <a class="btn btn-primary" href="{{route('post.single',$paginate->slug)}}">Read more →</a>
                    </div>
                </div>
                @endforeach
                <nav aria-label="Pagination">
                    @if($paginator->total() > $paginator->count())
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{$paginator}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
    </body>

@endsection
