<div class="white-box">
    <div class="user-bg"> 
        <img width="100%" alt="user" src="{{ asset('img/misc/background.jpg') }}">
        <div class="overlay-box">
            <div class="user-content">
                <img src="{{ asset('storage/posts/'. $post->image) }}" class="thumb-lg img-circle" alt="img">
                <h4 class="text-white">{{ $post->title }}</h4>
            </div>
        </div>
    </div>
    <div class="user-btm-box">
        <ul class="list-group">
            <li class="list-group-item">Content: {{ $post->body }}</li>
            <li class="list-group-item">Created at: {{ $post->created_at }}</li>
            <li class="list-group-item">Created by: Admin</li>
        </ul>
    </div>
</div>