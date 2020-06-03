

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
            <a class="{{ request()->is('cntsh/diagramme') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/diagramme') }}">Diagramme</a>
            <a class="{{ request()->is('cntsh/missions') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/missions') }}">Missions</a>
            <a class="{{ request()->is('cntsh/directeur') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/directeur') }}">Mot du directeur</a>
            <a class="{{ request()->is('cntsh/reseau') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/reseau') }}">Réseau national</a>
            <a class="{{ request()->is('cntsh/gouvernance') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/gouvernance') }}">Gouvernance</a>
            <a class="{{ request()->is('cntsh/histoire') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/histoire') }}">Histoire</a>
            <a class="{{ request()->is('cntsh/bilan') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('cntsh/bilan') }}">Bilan activité</a>
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
            <a class="{{ request()->is('sang/quoi') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/quoi') }}">Le sang, c'est quoi</a>
            <a class="{{ request()->is('sang/produit') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/produit') }}">Produit sanguins</a>
            <a class="{{ request()->is('sang/hemovigilance') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/hemovigilance') }}">Hemovigilance</a>
            <a class="{{ request()->is('sang/cout') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/cout') }}">Cout de prestation</a>
            <a class="{{ request()->is('sang/situation') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/situation') }}">Situation nationale de don de sang</a>
            <a class="{{ request()->is('sang/audit') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('sang/audit') }}">Audit</a>
        </div>
    
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partenaires 
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="{{ request()->is('partenaires/association') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('partenaires/association') }}">Association donneurs</a>
            <a class="{{ request()->is('partenaires/partenaires') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('partenaires/partenaires') }}">Partenaires institutionnels</a>
            <a class="{{ request()->is('partenaires/transfusion') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('partenaires/transfusion') }}">Transfusion mondiale</a>
            <a class="{{ request()->is('partenaires/press') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('partenaires/press') }}">Press</a>
        </div>
    
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Don du song 
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <a class="{{ request()->is('planification') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('planification') }}">Planification</a>
            <a class="{{ request()->is('don-du-song/Pourquoi') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/Pourquoi') }}">Pourquoi donner du sang?</a>
            <a class="{{ request()->is('don-du-song/qui') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/qui') }}">Qui peut donner du sang?</a>
            <a class="{{ request()->is('don-du-song/informations') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/informations') }}">Informations post-don</a>
            <a class="{{ request()->is('don-du-song/promesse') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/promesse') }}">Faire une promesse de don</a>
            <a class="{{ request()->is('don-du-song/ou-donner') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/ou-donner') }}">Ou donner son sang</a>
            <a class="{{ request()->is('don-du-song/faq') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('don-du-song/faq') }}">FAQ</a>
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

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lang @lang('menu.test')
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <a class="dropdown-item" href="{{ url('localization/fr') }}">Fr</a>
            <a class="dropdown-item" href="{{ url('localization/ar') }}">Ar</a>
        </div>
    
    </li>

    {{-- <li class="nav-item ml-3">
        <a class="btn btn-warning" href="{{ route('admin') }}">Back-office</a>
    </li> --}}
</ul>