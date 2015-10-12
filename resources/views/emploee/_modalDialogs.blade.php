<div class="modal fade" id="modal-emploee-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          ×
        </button>
        <h4 class="modal-title">Please Confirm</h4>
      </div>
      <div class="modal-body">
        <p class="lead">
          <i class="fa fa-question-circle fa-lg"></i>  
          Are you sure you want to delete  "{{$emploee->name}}" emploee ?
     
        </p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="/emploee/{{$emploee->id}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="DELETE">
     
         
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Cancel
          </button>
          <button type="submit" class="btn btn-danger">
            Delete File
          </button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modal-emploee-show">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          ×
        </button>
        <h4 class="modal-title">Emploee details</h4>
      </div>
      <div class="modal-body">
     	 <ul class="list-group">
    <li class="list-group-item">{{$emploee->name}}</li>
    <li class="list-group-item">{{$emploee->address}}</li>
    <li class="list-group-item">{{$emploee->salary}}</li>
    <li class="list-group-item">{{$emploee->company}}</li>
    <li class="list-group-item">{{$emploee->bio}}</li>
  </ul>
      </div>
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>



