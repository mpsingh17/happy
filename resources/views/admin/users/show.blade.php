<div class="white-box">
    <div class="user-bg"> 
        <img width="100%" alt="user" src="{{ asset('img/misc/background.jpg') }}">
        <div class="overlay-box">
            <div class="user-content">
                <img src="{{ asset('storage/avatars/'. $user->avatar) }}" class="thumb-lg img-circle" alt="img">
                <h4 class="text-white">{{ $user->name }}</h4>
                <h5 class="text-white">{{ $user->email }}</h5> 
            </div>
        </div>
    </div>
    <div class="user-btm-box">
        <ul class="list-group">
            <li class="list-group-item">Gender: {{ $user->gender }}</li>
            <li class="list-group-item">Confirmed: {{ $user->confirmed == 0 ? 'No' : 'Yes' }}</li>
            <li class="list-group-item">Active: {{ $user->status == 0 ? 'No' : 'Yes'}}</li>
            <li class="list-group-item">Provider: {{ $user->provider }}</li>
            <li class="list-group-item">Provider ID: {{ $user->provider_id }}</li>
            <li class="list-group-item">Member Since: {{ $user->created_at }}</li>
        </ul>
    </div>
</div>