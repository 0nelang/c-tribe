<header class="header header__black" id="header">
    <div class="header__wrap">
      <div class="header__logo"><a href="/frontend/homepage"><img class="logo-1" src="/images/logo-ctribe.svg"/><img class="logo-2" src="/images/logo-ctribe-white.svg"/></a></div>
      <div class="header__text">
        @isset($general)
        <span>{!! $general->title !!}</span></div>
        @endisset
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
          @isset($general->hover_image)
          <li class="menu-item"><a class="menu-link" href="/frontend/project" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="PROJECT">PROJECT</a></li>
          <li class="menu-item"><a class="menu-link" href="/frontend/our-people" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="PEOPLE">PEOPLE</a></li>
          <li class="menu-item"><a class="menu-link" href="/frontend/tribes" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="TRIBES">TRIBES</a></li>
          <li class="menu-item"><a class="menu-link" href="/frontend/flagship" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="FLAGSHIP">FLAGSHIP</a></li>
          <li class="menu-item"><a class="menu-link" href="#" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="SHOP">SHOP</a></li>
          <li class="menu-item"><a class="menu-link" href="/frontend/inspiration" data-bg="{{ asset('storage/' . $general->hover_image) }}" data-text="INSPIRATION">INSPIRATION</a></li>
          @endisset
        </ul>
      </div>
    </div>
  </header>