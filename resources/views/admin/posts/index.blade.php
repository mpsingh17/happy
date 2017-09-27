@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Posts</h4> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>CREATED AT</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="txt-oflo">{{ $post->id }}</td>
                                    <td class="txt-oflo">{{ $post->title }}</td>
                                    <td class="txt-oflo">{{ substr($post->body, 0, 15) }}{{ strlen($post->body) > 15 ? '...' : '' }}</td>
                                    <td class="txt-oflo">{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-link post_view">View</a>
                                        <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-link post_edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div id="edit_post"></div>
            <div id="view_post"></div>

            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" name="title" placeholder="Enter title..." class="form-control form-control-line"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Body</label>
                        <div class="col-md-12">
                            <textarea class="form-control form-control-line" name="body" placeholder="Body content..." rows="5"></textarea>
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
                            <button class="btn btn-success">Add Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/post_index.js') }}"></script>
@endsection