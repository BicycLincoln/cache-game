<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin.index.get') }}">Cache Game</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li{!! $section === 'caches' ? ' class="active"' : '' !!}><a href="{{ route('admin.caches.index.get') }}">Caches</a></li>
                <li{!! $section === 'users' ? ' class="active"' : '' !!}><a href="{{ route('admin.users.index.get') }}">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs"><p class="navbar-text">{{ isset($auth) ? $auth->full_name : 'test' }}</p></li>
                <li><a href="{{ route('auth.logout.any') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>