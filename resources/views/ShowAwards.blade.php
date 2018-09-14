@extends('Master')
@section('title')
    Awards of FIFA World Cup 2018 Russia
@endsection
@section('css')
    <link href="{{asset('/css/Awards/awards.css')}}" rel="stylesheet">
@endsection

@section('body')
<div class="section-header text-center"><h3>Awards</h3></div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <h2>Awards</h2>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <h2>Winner</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($awards as $awrds)
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 awards">
                <img src="/Images/Awards Images/{{$awrds->Awards_name}}.jpg" class="img-responsive img-rounded" alt="" />
                <h3>{{$awrds->Awards_name}}</h3>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 awards">
                <img src="/Images/Awards Images/{{$awrds->Winner}}.jpg" class="img-responsive img-rounded fadeInup" alt="" />
                <a href="#"><h3>{{$awrds->Winner}}</h3></a>
            </div>
             @endforeach
        </div>
    </div>
</div>
@endsection