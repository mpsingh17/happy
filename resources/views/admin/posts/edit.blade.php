<div class="white-box">
    <form class="form-horizontal form-material" method="POST" action="{{ route('posts.update', ['post' => $post]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label class="col-md-12">Title</label>
            <div class="col-md-12">
                <input type="text" class="form-control form-control-line" name="title" value="{{ $post->title }}" placeholder="Enter title...">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-12">Body</label>
            <div class="col-md-12">
                <textarea class="form-control form-control-line" name="body" placeholder="Body content..." rows="5">{{ $post->body }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Image</label>
            <div class="col-md-12">
                <input type="file" class="form-control form-control-line" name="image">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-success" id="btn_delete_post">Delete</button>
            </div>
        </div>
    </form>
</div>
<form id="form_delete_post" action="{{route('posts.destroy', ['post' => $post])}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
</form