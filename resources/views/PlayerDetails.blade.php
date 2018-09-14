@extends('Master')

@section('title')
{{$player->Player_name}} Details
@stop

@section('css')
<link href="{{asset('/css/Pdetails/Pdetails.css')}}" rel="stylesheet">
@stop

@section('body')
<div class="section-header text-center">
<div>
  <h3>{{$player->Player_name}}</h3>
</div>
<p>{{$player->Position}}</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="/Images/Players Image/{{$player->Country}}/{{$player->Player_name}}.jpg" class="img-responsive img-rounded " alt="" />
    </div>
    <div class="col-md-6">          
       <div id="player">
           <table class="table">
                <tbody>
                  <tr>
                    <td>{{$player->Player_name}}</td>
                    <td>{{$player->Country}}</td>
                  </tr>
                  <tr>
                    <td>Age</td>
                    <td>{{$player->Age}}</td>
                  </tr>
                  <tr>
                    <td>Jersey </td>
                    <td>{{$player->Jersey_number}}</td>
                  </tr>
                 <tr>
                    <td></td> 
                    <td></td>
                 </tr>
                </tbody>
         </table>
      </div>
   </div>
  </div>
</div>
<div id="player-d" class="container"> 
  <div class="text-center"><h3>Player Statistics</h3></div>
  <div id="plyr"><table class="table">
      <tbody>
        <tr>
          <td>Match Played </td>
            <td>{{$player->Match_played}}</td>
        </tr>
        <tr>
          <td>Goals Scored</td>
            <td>{{$player->Goals}}</td>
        </tr>
          <tr>
          <td>Assists</td>
            <td>{{$player->Assists}}</td>
        </tr>
          <tr>
          <td>Attempts</td>
            <td>{{$player->Attempts}}</td>
        </tr>
          <tr>
          <td>Yellow Card</td>
            <td>{{$player->Yellow_card}}</td>
        </tr>
          <tr>
          <td>Red Card</td>
            <td>{{$player->Red_card}}</td>
        </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
      
       </tbody>
    </table>
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