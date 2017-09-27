@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Comment List</h4> 
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
                                <th>BODY</th>
                                <th>CREATED AT</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td class="txt-oflo">{{ $comment->id }}</td>
                                    <td>{{ $comment->body }}</td>
                                    <td class="txt-oflo">{{ $comment->created_at }}</td>
                                    <td>
                                        <a href="{{ route('comments.edit', ['comment' => $comment]) }}" class="btn btn-link comment_edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div id="div_edit_comment"></div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/comment_index.js') }}"></script>
@endsection