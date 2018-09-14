@extends('Master')

@section('title')
Group Points
@stop

@section('css')
  <link rel="stylesheet" href="/css/Groups/groups.css">
@stop

@section('body')
<div class="container">
    <nav class="navbar navbar-default">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
                @php
                $g='A';
                $c=0;
                for($i=0;$i<8;$i++)
                {
                    foreach($groups as $grps)
                       if($grps->Groupp==$g)
                        {
                            echo'<li><a href="#">Group'. $g.'</a></li>';
                              $g++;
                            break;
                        }
                if($i==7)
                  $g='A';
                }
                @endphp
            </ul>
          </div>
    </nav>

    <div id="point">
        @while($i<16)
                <h2>Group {{$g}}</h2>
            <table class="table">
                <thead>
                      <tr>
                        <th class="col-lg-4">COUNTRY</th>
                        <th class="col-lg-1">MP</th>
                        <th class="col-lg-1">W</th>
                        <th class="col-lg-1">D</th>
                        <th class="col-lg-1">L</th>
                        <th class="col-lg-1">GF</th>
                        <th class="col-lg-1">GA</th>
                        <th class="col-lg-1">+/-</th>
                        <th class="col-lg-1">PTS</th>
                      </tr>
                 </thead>
                <tbody>
                @foreach($groups as $grps)
                   @if($grps->Groupp==$g)
                       @php
                       $c++
                       @endphp
                          <tr>
                            <td class="col-lg-4"><img src="/Images/Flags/{{$grps->Flag}}.png" /> {{$grps->Country}}</td>
                            <td class="col-lg-1">{{$grps->MP}}</td>
                            <td class="col-lg-1">{{$grps->W}}</td>
                            <td class="col-lg-1">{{$grps->D}}</td>
                            <td class="col-lg-1">{{$grps->L}}</td>
                            <td class="col-lg-1">{{$grps->GF}}</td>
                            <td class="col-lg-1">{{$grps->GA}}</td>
                            <td class="col-lg-1">{{$grps->PM}}</td>
                            <td class="col-lg-1">{{$grps->PTS}}</td>
                          </tr>
                    </tbody>
                      @if($c==4)
                         @php 
                          $g++;
                          $c=0;
                          $i++;
                          echo "<br />";
                         break;
                          @endphp
                      @endif
                   @endif
                 @endforeach
            </table>
        @endwhile
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