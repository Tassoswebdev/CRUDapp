@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Emploees <small>» Show Emploee</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Show Emploee</h3>
          </div>
          <div class="panel-body">

            @include('partials.errors')
            @include('partials.success')

        	 <ul class="list-group">
    <li class="list-group-item">{{$emploee->name}}</li>
    <li class="list-group-item">{{$emploee->address}}</li>
    <li class="list-group-item">{{$emploee->salary}}</li>
    <li class="list-group-item">{{$emploee->company}}</li>
    <li class="list-group-item">{{$emploee->bio}}</li>
  </ul>

          </div>
        </div>
      </div>
    </div>
  </div>

  

@stop