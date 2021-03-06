<!-- HEADER-->
<header class="header header__black" id="header">
    <div class="header__wrap">
      <div class="header__logo"><a href="/"><img class="logo-1" src="{{ asset('storage/' . $general->brand_navbar1) }}"/><img class="logo-2" src="{{ asset('storage/' . $general->brand_navbar2) }}"/></a></div>
      <div class="header__text">
        <span>{!! $general->title !!}</span>
      </div>
      <div class="header__menu">
        <div class="menu-toggle"><span>MENU</span><span class="close">CLOSE</span></div>
      </div>
    </div>
    <div class="main-menu">
      <div class="main-menu__wrap">
        <div class="main-menu__fade-top"></div>
        <div class="main-menu__fade-bot"></div>
        <div class="main-menu__bg">
          <div class="bg-hover"></div><span></span>
        </div>

        <ul>
            @foreach ($menu as $m)
            <li class="menu-item text-uppercase @if ($m->disabled == true) disabled @endif"><a class="menu-link"
                @if ($m->custom == true)
                    @if ($m->custom_url != null)
                        href="{{ route('lol', ['menu' => $m->custom_url]) }}"
                    @else
                    href="{{ route('lol', ['menu' => $m->default_url]) }}"
                    @endif

                    @if ($m->custom_name != null)
                    data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="{{ $m->custom_name }}">{{ $m->custom_name }}</a></li>
                    @else
                    data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="{{ $m->default_name }}">{{ $m->default_name }}</a></li>

                    @endif
                @else
                href="{{ $m->default_url }}" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="{{ $m->default_name }}">{{ $m->default_name }}</a></li>
                @endif
                @endforeach
        </ul>
      </div>
    </div>
  </header>
