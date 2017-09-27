<div class="white-box">
    <form id="edit_role_form" class="form-horizontal form-material" method="POST" action="{{ route('roles.update', ['role' => $role]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Role Name</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="role_name" value="{{ $role->name }}">
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-sm-12">
                <button id="edit_role" class="btn btn-success">Edit Role</button>
                <button id="delete_role" class="btn btn-success">Delete Role</button>
            </div>
        </div>
    </form>
</div>

<form id="delete_role_form" action="{{route('roles.destroy', ['role' => $role])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form>
