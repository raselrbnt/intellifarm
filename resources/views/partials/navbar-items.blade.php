<a href="{{ route('home') }}">
    <img class="companyLogoImg" src="{{ asset('assets/farmhub-logo.png') }}" alt="Logo Intellifarm" />
</a>
<div class="flexRowNav">
    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
        ABOUT
    </a>
    <a class="nav-link {{ Route::currentRouteName() == 'product' ? 'active' : '' }}"
        href="{{ Route::has('product') ? route('product') : '#' }}">
        PRODUCT
    </a>
    <a class="nav-link {{ Route::currentRouteName() == 'sustainability' ? 'active' : '' }}"
        href="{{ route('sustainability') }}">
        SUSTAINABILITY
    </a>
    <a class="nav-link {{ Route::currentRouteName() == 'career' ? 'active' : '' }}" href="{{ route('career') }}">
        CAREER
    </a>
</div>
