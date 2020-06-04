

<ul class="{{ app()->getLocale() == 'fr' ? 'navbar-nav p-0 w-100' : 'navbar-nav p-0 w-100 text-right' }}">
    <li class="nav-item">
        <a class="{{ request()->is('/') ? 'nav-link home active' : 'nav-link home' }}" href="{{ route('home') }}">
            <i  class="fas fa-home d-none d-md-block"></i>
            <span class="d-sm-none">@lang('menu.Accueil')</span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('menu.cntsh')
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            @foreach ($cntsh as $e)
                <a class="{{ request()->is($e['route']) ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url($e['route']) }}">@lang('menu.'.$e['name'])</a>
            @endforeach
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('menu.sang')
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            @foreach ($sang as $e)
                <a class="{{ request()->is($e['route']) ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url($e['route']) }}">@lang('menu.'.$e['name'])</a>
            @endforeach
         </div>

    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('menu.partenaires')
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            @foreach ($partenaires as $e)
            <a class="{{ request()->is($e['route']) ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url($e['route']) }}">@lang('menu.'.$e['name'])</a>
        @endforeach
    </div>

    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('menu.Dondusong')
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
            @foreach ($don as $e)
                <a class="{{ request()->is($e['route']) ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url($e['route']) }}">@lang('menu.'.$e['name'])</a>
            @endforeach
        </div>

    </li>

    <li class="nav-item">
        <a class="{{ request()->is('activite') ? 'nav-link active' : 'nav-link' }}" href="{{ route('activite') }}">@lang('menu.NosActivies')</a>
    </li>
    <li class="nav-item">
        <a class="{{ request()->is('galerie') ? 'nav-link active' : 'nav-link' }}" href="{{ route('galerie') }}">@lang('menu.Galerie')</a>
    </li>
    <li class="nav-item">
        <a class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" href="{{ route('contact') }}">@lang('menu.Contact')</a>
    </li>
    <span style="flex: 1 1 auto;"></span>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-language fa-2x"></i>&nbsp;<span>({{app()->getLocale()}})</span>
        </a>
        {{-- <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a> --}}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <a class="{{ app()->getLocale() == 'fr' ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('localization/fr') }}">Fr</a>
            <a class="{{ app()->getLocale() == 'ar' ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ url('localization/ar') }}">Ar</a>
        </div>

    </li>

    {{-- <li class="nav-item ml-3">
        <a class="btn btn-warning" href="{{ route('admin') }}">Back-office</a>
    </li> --}}
</ul>
