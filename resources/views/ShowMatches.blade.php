@extends('Master')

@section('title')
    Matches of FIFA World Cup 2018 Russia
@endsection

@section('css')
    <link rel="stylesheet" href="/css/Matches/matches.css">
@endsection

@section('body')
    <div id="match" class="container">
        <header class="section-header">
        </header>
        <table class="table">
            <tbody>
            @foreach($matches as $key=>$mtch)
            <tr>
                <td id="date" class="col-lg-4 col-md-4 col-sm-3 col-xs-3">{{$mtch->Date_time}}<br>{{$mtch->Stadium_name}}<br>Host City<br>{{$mtch->Match_id}}</td>
                <td class="rslt" ><div class="full">Full Time</div><br><div class="team">{{$mtch->Team1_name}} {{$mtch->Team1_goal}}-{{$mtch->Team2_goal}} {{$mtch->Team2_name}}</div><br><div class="result"><a href="/pdetails/{{$mtch->Man_of_the_match}}">{{$mtch->Man_of_the_match}}</a></div></td>
            </tr>
             @endforeach
            </tbody>
        </table>
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
