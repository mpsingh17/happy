<div class="white-box">
    <form id="form_edit_tag" class="form-horizontal form-material" method="POST" action="{{ route('tags.update', ['tag' => $tag]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Tag Name</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="name" value="{{ $tag->name }}">
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-sm-12">
                <button id="edit_tag" class="btn btn-success">Edit tag</button>
                <button id="delete_tag" class="btn btn-success">Delete tag</button>
            </div>
        </div>
    </form>
</div>

<form id="form_delete_tag" action="{{route('tags.destroy', ['tag' => $tag])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form>
