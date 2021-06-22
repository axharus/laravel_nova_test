@extends('layouts.app')
@section('content')

    <body>

    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Комплекси нашої компанії</h1>

            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($paginator as $paginate)
                    <div class="card mb-4" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
{{--                                        @foreach($paginate->multimedia as $key => $slider)--}}
{{--                                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">--}}
{{--                                                <img src="{{asset('/storage/'.$slider->multimedia)}}" class="d-block w-100"  alt="...">--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
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
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{route('complex.single',$paginate->slug)}}"><h2 class="card-title font-weight-bold">{{$paginate->title}}</h2></a>
                                    <p class="card-text">{{$paginate->description}}</p>
                                    <h3 class="card-text font-weight-bold">від {{$paginate->price}}$</h3>
                                    <p class="card-text">Закінчення побудови {{date('d-M-Y',strtotime($paginate->end_date))}}</p>
                                    <hr />


                                    <p class="card-text">Площа: {{$paginate->square}} m&sup2;</p>
                                    <p class="card-text">Дистанція до моря: {{$paginate->distanceToSea}} м</p>

                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            <!-- Pagination-->
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
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Side widget-->
                <div class="card mb-4">
                    <form action="{{route('complexes')}}">



                        <div class="card-header">Етап побудови</div>
                        <div class="card-body">
                            <select name="built" id="built">
                                <option value="all">Всі</option>
                                <option value=">">Будуються</option>
                                <option value="<">Побудовані</option>
                            </select>
                            <br>
                            <br>
                            <p>Ціна</p>

                            <select name="price" id="price">
                                <option value="all">Всі</option>
                                <option value="0">0-20.000$</option>
                                <option value="20000">20.000$-39.999$</option>
                                <option value="40000">40.000$-59.999$</option>
                                <option value="60000">60.000$-79.999$</option>
                                <option value="80000">80.000$+</option>

                            </select>
                            <br>
                            <br>
                            <p>Вид планировки</p>
                            <select name="layouts" id="layouts">
                                <option value="all">All</option>
                                <option value="1+1">1+1</option>
                                <option value="2+1">2+1</option>
                                <option value="3+1">3+1</option>
                                <option value="Penthouse">Penthouse</option>
                            </select>
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
    </html>

@endsection
