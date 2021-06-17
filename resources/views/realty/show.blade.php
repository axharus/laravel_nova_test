@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">

                <article>

                    <header class="mb-4">
                        <p><a href="{{url('/')}}">Головна</a>/<a href="{{route('flat.index')}}">Будинки</a>/{{$item->title}}</p>
                        <h1 class="fw-bolder mb-1">{{$item->title}}</h1>
                    </header>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($item->multimedia as $key => $slider)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img src="{{asset('/storage/'.$slider->multimedia)}}" class="d-block w-100"  alt="...">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <hr />
                    <section class="mb-5">
                        <p class="card-text">Закінчення побудови {{date('d-M-Y',strtotime($item->end_date))}}</p>
                        <p>
                            Планировки:
                            @foreach($item->layouts as $layouts)
                                {{$layouts->title}},
                            @endforeach
                        </p>
                        <p class="card-text">Площа: {{$item->square}} m&sup2;</p>
                        <p class="card-text">Дистанція до моря: {{$item->distanceToSea}} м</p>
                        <p class="card-text">Кількість балконів - {{$item->quantityBalcony}}</p>
                        <p class="card-text">Кількість санвузлів - {{$item->quantityBathroom}}</p>
                    </section>
                    <hr />
                </article>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-8">

                            <article>

                                <header class="mb-4">
                                    <h2 class="font-weight-bold">Опис</h2>
                                </header>
                                <p>
                                    {{$item->description}}
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-8">

                            <article>

                                <header class="mb-4">
                                    <h2 class="font-weight-bold">Інфраструктура</h2>
                                </header>
                                @foreach($item->infrastructures as $infrastructure)
                                    <h4 align="center">{{$infrastructure->title}} &#10004;</h4>
                                @endforeach
                            </article>
                        </div>
                    </div>
                </div>   <hr />

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-8">

                            <article>

                                <header class="mb-4">
                                    <h2 class="font-weight-bold">Розсташування</h2>
                                </header>
                                <img src="{{asset('/storage/'.$item->locationImage)}}" alt="">
                            </article>
                        </div>
                    </div>
                </div>
                <hr />
            </div>



            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Side widet-->
                <div class="card mb-4">
                    <div class="card-header"><h1>від {{$item->price}}$</h1></div>
                    {{--                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
