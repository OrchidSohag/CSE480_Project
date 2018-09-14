@extends('Master')
@section('title')
    Players of @php $key=$players[0]; echo $key->Country;  @endphp
@stop

@section('css')
    <link rel="stylesheet" href="/css/Players/teams.css">
    <link rel="stylesheet" href="/css/Players/responsive ShowPlayers.css">
@stop
	
@section('body')
    <div class="our-team-section team-inner-page">
        <div class="container">
            <header class="section-header text-center">
              <h3>Players of @php $key=$players[0]; echo $key->Country;  @endphp</h3>
            </header>
            <div class="row">  
                @foreach($players as $plyr)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img class="img-responsive img-rounded" src="/Images/Players Image/{{$plyr->Country}}/{{$plyr->Image}}.jpg" alt="{{$plyr->Player_name}}" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="/pdetails/{{$plyr->Player_name}}"><h5 class="person-name">{{$plyr->Player_name}}</h5></a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <h6><td>{{$plyr->Position}}</td></h6>
                                    </tr>
                                </tbody>
                            </table>
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
@stop