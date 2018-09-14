@extends('Master')

@section('title')
{{$stadium->Stadium_name}}
@endsection

@section('css')
  <link href="{{asset('/css/Stadium/Stadium Details.css')}}" rel="stylesheet">
@endsection

@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
              <div class="section-header text-center">
                    <div>
                      <h3>{{$stadium->Stadium_name}}</h3>
                    </div>
              </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="{{asset('/Images/Stadiums_Image/'.$stadium->Image)}}" class="img-responsive img-rounded" alt="" />
        </div>
    </div>
</div>
<div id="stadium" class="container"> 
  <div class="text-center"><h3>{!! $stadium->Description !!}</h3></div>
  <div id="stdm">
      <table class="table">
      <tbody>
        <tr>
          <td>Stadium Name</td>
            <td>{{$stadium->Stadium_name}}</td>
        </tr>
          <tr>
          <td>Host City</td>
            <td>{{$stadium->Host_city}}</td>
        </tr>
          <tr>
          <td>Location</td>
            <td>{{$stadium->Location}}</td>
        </tr>
          <tr>
          <td>Capacity</td>
            <td>{{$stadium->Capacity}}</td>
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


@endsection