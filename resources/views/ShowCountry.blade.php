@extends('Master')

@section('title')
Teams of World Cup 2018 Russia
@stop

@section('css')
<link href="/css/Country/Country.css" rel="stylesheet">
@stop

@section('body')
<section id="portfolio" >
  <div class="container">
    <header class="section-header text-center">
      <h3>All Teams</h3>
    </header>
    <div class="row portfolio-container">
    @foreach($country as $cntry)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="card profile-card-1">
                    <a href="/players/{{$cntry->Country}}"><img src="{{asset('Images/Country Image/'.$cntry->Country_Image.".jpg")}}" alt="profile-sample1" class="background"/>
                    <img src="{{asset('Images/Flags/'.$cntry->Flag.".png")}}" alt="profile-image" class="profile"/>
                    <div class="card-content">
                        <h2>{{$cntry->Country}}</h3>
                    </div></a>
                </div>
                <p class="float-left text-center">Group <strong>{{$cntry->Groupp}}</strong></p>
            </div>
        @endforeach
    </div>
</div>
</section>

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

@stop