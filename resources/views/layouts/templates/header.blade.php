<div class="navigation-wrapper">

    <nav class="navbar navbar-top navbar-expand-md navbar-light bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-toggler-css navbar-menu-toggler collapsed sidebar-toggler">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <button class="navbar-toggler navbar-toggler-css-reverse navbar-menu-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-top-collapsible" aria-controls="navbar-top-collapsible" aria-expanded="false" aria-label="Toggle navigation">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-top-collapsible" style="height:57px;">

            </div>
        </div>
    </nav>

    <nav class="navbar navbar-toolbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav navbar-menu-primary">




                <li class="nav-item nav-user-dropdown dropdown">
                    <a href="#" class="nav-link dropdown-toggle dropdown-nocaret" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-sm dropdown-menu-left">
                        <div class="dropdown-header pt-0">
                            <small class="text-overflow m-0">bienvenu</small>
                        </div>

                        <a class="dropdown-item"  href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i data-feather="power" class="svg-icon mr-2 ml-1"></i>

                                {{ __('Se déconnecter') }}</a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf

                </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



</div>
