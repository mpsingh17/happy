<div class="white-box">
    <form id="form_edit_comment" class="form-horizontal form-material" method="POST" action="{{ route('comments.update', ['comment' => $comment]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Comment body</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="body" value="{{ $comment->body }}">
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-sm-12">
                <button id="edit_comment" class="btn btn-success">Edit Comment</button>
                <button id="delete_comment" class="btn btn-success">Delete Comment</button>
            </div>
        </div>
    </form>
</div>

<form id="form_delete_comment" action="{{route('comments.destroy', ['comment' => $comment])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form>
