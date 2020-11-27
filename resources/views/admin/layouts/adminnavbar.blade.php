<!-- Navbar -->
<nav class="main-header navbar navbar-expand sticky-top navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('password.change') }}">
                                    {{ __('Change Password') }}
                                </a>

                                <form method="post" id="delete-form-user-{{ Auth::user()->id }}" action="{{ route('deleteadmin',Auth::user()->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                                <button onclick="if(confirm('Are you sure to delete your Admin account?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-user-{{ Auth::user()->id }}').submit();}
                                    else{event.preventDefault();}" class="dropdown-item">
                                    Delete My Account</button>



                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                </ul>
            </div>
        </div>

    </ul>
</nav>
<!-- /.navbar -->
