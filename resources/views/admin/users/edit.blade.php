<div class="white-box">
    <form class="form-horizontal form-material" method="POST" action="{{ route('users.update', ['user' => $user]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Name</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="name" value="{{ $user->name }}" placeholder="Enter name...">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Gender</label>
            <div class="col-md-12">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="male" {{ $user->gender == 'male' ? 'checked' : ''  }}>male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : ''  }}>female
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="undefined" {{ $user->gender == 'undefined' ? 'checked' : ''  }}>undefined
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Confirmed</label>
            <div class="col-md-12">
                <label class="radio-inline">
                    <input type="radio" name="confirmed" value="1" {{ $user->confirmed == 1 ? 'checked' : ''  }}>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="confirmed" value="0" {{ $user->confirmed == 0 ? 'checked' : ''  }}>No
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <label class="radio-inline">
                    <input type="radio" name="status" value="1" {{ $user->status == 1 ? 'checked' : ''  }}>Enable
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="0" {{ $user->status == 0 ? 'checked' : ''  }}>Disbale
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Avatar</label>
            <div class="col-md-12">
                <input type="file" class="form-control form-control-line" name="avatar">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Email</label>
            <div class="col-md-12">
                <input type="email" class="form-control form-control-line" name="email" value="{{ $user->email }}" placeholder="Enter email...">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
                <input type="password" class="form-control form-control-line" name="password" placeholder="Enter password...">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Confirm password</label>
            <div class="col-md-12">
                <input type="password" class="form-control form-control-line" name="password_confirmation" placeholder="Enter confirm password...">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-success" id="btn_delete_user">Delete</button>
            </div>
        </div>

    </form>
</div>
<form id="delete_user_form" action="{{route('users.destroy', ['user' => $user])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form