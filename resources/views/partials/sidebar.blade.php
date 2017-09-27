<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            @if(Auth::check())
                <li style="padding: 10px 0 0;">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Roles</span></a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Permissions</span></a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Users</span></a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Posts</span></a>
                </li>
                <li>
                    <a href="{{ route('comments.index') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Comments</span></a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Tags</span></a>
                </li>
            @else
                <li>
                    <a href="{{ url('/') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Home</span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">About Us</span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Contact Us</span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Join Us</span></a>
                </li>
            @endif
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->