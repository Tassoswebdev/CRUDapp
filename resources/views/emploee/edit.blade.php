@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Emploees <small>» Edit Emploee</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Emploee Edit Form</h3>
          </div>
          <div class="panel-body">

            @include('partials.errors')
            @include('partials.success')

            <form class="form-horizontal" role="form" method="POST"
                  action="/emploee/{{ $id }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="id" value="{{ $id }}">

              

              @include('emploee._form')

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-save"></i>
                      Save Changes
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