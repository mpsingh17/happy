@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Tag List</h4> 
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
                                <th>NAME</th>
                                <th>CREATED AT</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="txt-oflo">{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td class="txt-oflo">{{ $tag->created_at }}</td>
                                    <td>
                                        <a href="{{ route('tags.edit', ['tag' => $tag]) }}" class="btn btn-link tag_edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="{{ route('tags.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Tag Name</label>
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Enter tag name..." class="form-control form-control-line"> 
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Add tag</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="div_edit_tag"></div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/tag_index.js') }}"></script>
@endsection