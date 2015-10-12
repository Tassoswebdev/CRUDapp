@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>Emploees <small>» Listing</small></h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="/emploee/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New Emploee
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('partials.errors')
        @include('partials.success')

        <table id="emploees-table" class="table table-striped table-bordered">
          <thead>
          <tr>
       
            <th class="hidden-sm">name</th>
            <th class="hidden-md">address</th>
            <th class="hidden-md">phone</th>
            <th class="hidden-md">salary</th>
            <th class="hidden-sm">company</th>
            <th data-sortable="false">bio</th>
            <th class="hidden-sm">Crud actions </th>
          </tr>
          </thead>
          <tbody>
          @foreach ($emploees as $emploee)
            <tr>
              <td>{{ $emploee->name }}</td>
              <td>{{ $emploee->address }}</td>
              <td class="hidden-sm">{{ $emploee->phone }}</td>
              <td class="hidden-md">{{ $emploee->salary }}</td>
              <td class="hidden-md">{{ $emploee->company }}</td>
              <td class="hidden-md">{{ $emploee->bio }}</td>
         
              <td>
              
               <button type="button" class="btn btn-xs btn-info"
            		  onclick="show_emploee()">
                       <i class="fa fa-times-circle fa-lg"></i>
      				  Show
     			 </button>
                <a href="/emploee/{{ $emploee->id }}/edit"
                   class="btn btn-xs btn-warning">
                  <i class="fa fa-edit"></i> Edit
                </a>              
                 <button type="button" class="btn btn-xs btn-danger"
            		  onclick="delete_emploee()">
                       <i class="fa fa-times-circle fa-lg"></i>
      				  Delete
     			 </button>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @include('emploee._modalDialogs');
@stop

@section('scripts')
  <script>

function delete_emploee() {
    /*   $("#delete-emploee-id").html(id);*/
 
       $("#modal-emploee-delete").modal("show");
     }
   
function show_emploee(){
    $("#modal-emploee-show").modal("show");
	
}
          
    $(function() {
      $("#emploees-table").DataTable({
      });
    });

  
    
  </script>
@stop