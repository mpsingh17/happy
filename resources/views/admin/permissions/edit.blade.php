<div class="white-box">
    <form id="edit_permission_form" class="form-horizontal form-material" method="POST" action="{{ route('permissions.update', ['permission' => $permission]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Permission Name</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="name" value="{{ $permission->name }}">
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-sm-12">
                <button id="edit_permission" class="btn btn-success">Edit Role</button>
                <button id="delete_permission" class="btn btn-success">Delete Role</button>
            </div>
        </div>
    </form>
</div>

<form id="delete_permission_form" action="{{route('permissions.destroy', ['permission' => $permission])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form>
