@if (count($errors) > 0)
  <ul class="list-group">
    @foreach ($errors->all() as $error)
      <li class="list-group-item text-danger">{{ $error }}</li>
    @endforeach
  </ul>
@endif

@if (Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
@endif

@if (Session::has('fail'))
  <div class="alert alert-danger">
    {{ Session::get('fail') }}
  </div>
@endif