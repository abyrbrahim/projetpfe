<nav id="sidebar" class="sidebar">
    <div class="sidebar-brand">
        <img src="../../assets/layouts/logos/logo.png" class="img" alt="">
        <img src="../../assets/layouts/logos/logo-sm.png" class="img-sm" alt="">
    </div>

    <ul class="sidebar-menu">
        <li class="header-menu">
            <span>Accueil</span>
        </li>
        @if (Session::get('page') == 'dashboard')
        @php
        $active = 'active current';
        @endphp
        @else
        @php
        $active = '';
        @endphp
        @endif
        <li class="{{ $active }}">
            <a href="{{route('home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-graph-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                </svg>
                <span>Statistiques</span>

            </a>

        </li>
        @if(Auth::user()->isAdmin())
        <li class="header-menu">
            <span>Liste des utilisateurs</span>
        </li>
        @if (Session::get('page') == 'users')
        @php
        $active = 'active current';
        @endphp
        @else
        @php
        $active = '';
        @endphp
        @endif
        <li class="{{ $active }}">
            <a href="{{route('users')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    <path fill-rule="evenodd"
                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <span>Utilisateurs</span>

            </a>

        </li>
        @endif
        <li class="header-menu">
            <span>Liste des clients</span>
        </li>
        @if (Session::get('page') == 'clients')
        @php
        $active = 'active current';
        @endphp
        @else
        @php
        $active = '';
        @endphp
        @endif
        <li class="{{ $active }}">
            <a href="{{route('clients')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                <span>Clients</span>

            </a>

        </li>

        <li class="header-menu">
            <span>Liste des produits</span>
        </li>
        @if (Session::get('page') == 'products')
        @php
        $active = 'active current';
        @endphp
        @else
        @php
        $active = '';
        @endphp
        @endif
        <li class="{{ $active }}">
            <a href="{{route('products')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path
                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg>
                <span>Produits</span>

            </a>


        </li>
        <li class="header-menu">
            <span>Liste des commandes</span>
        </li>
        @if (Session::get('page') == 'orders')
        @php
        $active = 'active current';
        @endphp
        @else
        @php
        $active = '';
        @endphp
        @endif
        <li class="{{ $active }}">
            <a href="{{route('orders')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-bag-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
                <span>Commandes</span>
            </a>

        </li>




    </ul>
</nav>
