

<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="{{ request()->is('/') ? 'nav-link home active' : 'nav-link home' }}" href="{{ route('home') }}">
            <i  class="fas fa-home d-none d-md-block"></i>
            <span class="d-sm-none">Accueil</span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            c n t s h 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            
            {{-- <a class="{{ request()->is($e->route) ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route($e->route) }}">{{$e->name}}</a> --}}
            {{-- <div class="dropdown-divider"></div> --}}
            <a class="{{ request()->is('blog') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('blog') }}">Diagramme</a>
            <a class="{{ request()->is('article/missions') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/missions') }}">Missions</a>
            <a class="{{ request()->is('president') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/missions') }}">Mot du directeur</a>
            <a class="{{ request()->is('article/article/reseau') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/reseau') }}">Réseau national</a>
            <a class="{{ request()->is('article/gouvernance') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/gouvernance') }}">Gouvernance</a>
            <a class="{{ request()->is('article/histoire') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/histoire') }}">Histoire</a>
            <a class="{{ request()->is('article/bilan') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/bilan') }}">Bilan activité</a>
            {{-- <a class="dropdown-item" href="{{ route('blog') }}">{{ request()->routeIs('activite') == 1 ? 'yes' : 'no' }}</a>
            <a class="dropdown-item" href="{{ route('blog') }}">{{ (request()->is('activite')) ? 'yes' : 'no' }}</a> --}}
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sang 
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="{{ request()->is('article/produit') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/produit') }}">Produit sanguins</a>
            <a class="{{ request()->is('article/quoi') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/quoi') }}">Le sang, c'est quoi</a>
            <a class="{{ request()->is('article/hemovigilance') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/hemovigilance') }}">Hemovigilance</a>
            <a class="{{ request()->is('article/cout') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/cout') }}">Cout de prestation</a>
            <a class="{{ request()->is('article/situation') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/situation') }}">Situation nationale de don de sang</a>
            <a class="{{ request()->is('article/audit') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/audit') }}">Audit</a>
        </div>
    
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partenaires 
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="{{ request()->is('article/association') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/association') }}">Association donneurs</a>
            <a class="{{ request()->is('article/partenaires') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/partenaires') }}">Partenaires institutionnels</a>
            <a class="{{ request()->is('article/transfusion') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/transfusion') }}">Transfusion mondiale</a>
            <a class="{{ request()->is('article/press') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/press') }}">Press</a>
        </div>
    
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Don du song 
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <a class="{{ request()->is('planification') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('planification') }}">Planification</a>
            <a class="{{ request()->is('article/Pourquoi') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/Pourquoi') }}">Pourquoi donner du sang?</a>
            <a class="{{ request()->is('article/qui') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/qui') }}">Qui peut deonner du sang?</a>
            <a class="{{ request()->is('article/informations') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/informations') }}">Informations post-don</a>
            <a class="{{ request()->is('article/promesse') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/promesse') }}">Faire une promesse de don</a>
            <a class="{{ request()->is('article/donner') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/donner') }}">Ou donner son sang</a>
            <a class="{{ request()->is('article/faq') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('article/faq') }}">FAQ</a>
        </div>
    
    </li>

    <li class="nav-item">
        <a class="{{ request()->is('activite') ? 'nav-link active' : 'nav-link' }}" href="{{ route('activite') }}">Nos Activiés</a>
    </li>
    <li class="nav-item">
        <a class="{{ request()->is('galerie') ? 'nav-link active' : 'nav-link' }}" href="{{ route('galerie') }}">Galerie</a>
    </li>
    <li class="nav-item">
        <a class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" href="{{ route('contact') }}">Contact</a>
    </li>

    {{-- <li class="nav-item ml-3">
        <a class="btn btn-warning" href="{{ route('admin') }}">Back-office</a>
    </li> --}}
</ul>