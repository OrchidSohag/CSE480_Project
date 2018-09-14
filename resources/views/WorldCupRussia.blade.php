@extends('Master')

@section('title')
    FIFA World Cup 2018 Russia
@endsection

@section('css')
    <style>
        .crsl,.FP {
            padding-top: 3%;
        }
        .FP div {
            padding-bottom: 3%;
        }
    </style>
@endsection


@section('body')
    <div class="container crsl">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('Images/WorldCupRussia/France.jpg')}}" alt="Champion France" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Champions</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('Images/WorldCupRussia/BestGoalKick.jpg')}}" alt="Best Goal Kick" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Best Goal Kick</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('Images/WorldCupRussia/BestSaves.jpg')}}" alt="Best Players" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Best Save of FIFA World Cup 2018 Russia</h3>
                    </div>
                </div>


            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <div id="home" class="container">
        <div class="row FP">
            <div class="col-sm-12 colo-lg-12 colo-md-12"><img class="img img-responsive" src="{{asset('Images/WorldCupRussia/awards.jpg')}}">
                <a href="{{route('awards')}}"><h3 class="text-center">View Awards Winner</h3></a></div>
            <h1 class="text-center">Some Featured Photos </h1>
            <div class="col-sm-12 colo-lg-12 colo-md-12"><img class="img img-responsive"  src="{{asset('Images/WorldCupRussia/Fan.jpg')}}"></div>
            <div class="col-sm-12 colo-lg-12 colo-md-12"><img class="img img-responsive" src="{{asset('Images/WorldCupRussia/Fan2.jpg')}}"></div>
            <div class="col-sm-12 colo-lg-12 colo-md-12"><img class="img img-responsive" src="{{asset('Images/WorldCupRussia/Fan1.jpg')}}"></div>
            <div class="col-sm-12 colo-lg-12 colo-md-12"><img class="img img-responsive" src="{{asset('Images/WorldCupRussia/City.jpg')}}"></div>
        </div>
    </div>


    @auth
        <div class="container">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Comment:</label>
                    <div>
                        <textarea class="col-lg-6"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endauth


@endsection