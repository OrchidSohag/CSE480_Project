@extends('Master')

@section('title')
    Stadiums FIFA World Cup 2018 Russia
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <link href="/css/Stadium/Stadium.css" rel="stylesheet">
@endsection

@section('body')
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="section-header text-center">
                <div>
                    <h3>Stadiums of Russia World Cup 2018</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($stadium as $key=>$stdm)
                    @if($key>1 && $key%2 ==0)
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 float-right">
                    @else
                            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                        @endif
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <img src="/Images/Stadiums_Image/{{$stdm->Image}}" />
                                <imgcaption>
                                    <h4>{{$stdm->Stadium_name}}</h4>
                                </imgcaption>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a href="/sdetails/{{$stdm->Stadium_name}}"> <h4>Stadium Details</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

        @auth
            <div class="container">
                <form class="form-horizontal" action="{{route('comment')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2">Comment:</label>
                        <div>
                            <textarea name="comment" class="col-lg-6"></textarea>
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
