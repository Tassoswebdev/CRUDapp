@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Emploees <small>� Create New Emploee</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">New Emploee Form</h3>
          </div>
          <div class="panel-body">

            @include('partials.errors')

            <form class="form-horizontal" role="form" method="POST"
                  action="/emploee">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              
               @include('emploee._form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-plus-circle"></i>
                      Add New Emploee
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

@stop