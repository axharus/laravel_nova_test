@extends('layouts.app')
@section('content')
<div class="container">

    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Недвижимость от застройщика в Мерсине с гарантией качества</h1>

            </div>
        </div>
    </header>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($items as $key=> $item)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <div class="card mb-4" >
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach($item->multimedia as $keyImage => $sliderImage)
                                                @if($keyImage == 0)
                                                    <img src="{{asset('/storage/'.$sliderImage->multimedia)}}" class="d-block w-100"  alt="...">
                                                @endif
                                            @endforeach
                                        </div>
{{--                                        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">--}}
{{--                                            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>--}}
{{--                                            <span class="sr-only">Previous</span>--}}
{{--                                        </a>--}}
{{--                                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                            <span class="sr-only">Next</span>--}}
{{--                                        </a>--}}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="{{route('flat.show',$item->id)}}"><h2 class="card-title font-weight-bold">{{$item->title}}</h2></a>
                                        <p class="card-text">{{$item->description}}</p>
                                        <h3 class="card-text font-weight-bold">від {{$item->price}}$</h3>
                                        <p class="card-text">Закінчення побудови {{date('d-M-Y',strtotime($item->end_date))}}</p>
                                        <hr />
                                        Планировки:
                                        @foreach($item->layouts as $layouts)
                                            {{$layouts->title}},
                                        @endforeach
                                        <p class="card-text">Площа: {{$item->square}} m&sup2;</p>
                                        <p class="card-text">Дистанція до моря: {{$item->distanceToSea}} м</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
        </div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@endsection
