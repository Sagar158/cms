<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
  <nav
    class="{{$configData['navbarMainClass']}} @if(($configData['isNavbarDark'])=== true) {{'navbar-dark'}} @elseif(($configData['isNavbarDark'])=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
    <div class="nav-wrapper">
    <ul class="navbar-list left">
      <img src="{{asset('images/logo/logo.png')}}" style="height: 60px;" alt="">
    </ul>
      <ul class="navbar-list custom-bar">
      <li class="navbar-link"><a class="list-links" href="{{url('/')}}">DASHBOARD</a></li>
      <li class="navbar-link"><a class="list-links" href="{{asset('message/inbox')}}">MAIL</a></li>
      <li class="navbar-link"><a class="list-links" href="javascript:void(0);">CREDIT PROFILE</a></li>
      <li class="navbar-link"><a class="list-links" onclick="submenu()" href="javascript:void(0);">SETTINGS</a></li>
</ul>
      <ul class="navbar-list right">
        <li class="hide-on-med-and-down">
          <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
            <i class="material-icons">settings_overscan</i>
          </a>
        </li>
        <li class="hide-on-large-only">
          <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
            <i class="material-icons">search </i>
          </a>
        </li>
        <li>
          <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
            data-target="notifications-dropdown">
            <i class="material-icons">notifications_none
              <small class="notification-badge orange accent-3">5</small>
            </i>
          </a>
        </li>
        <li>
          <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
            data-target="profile-dropdown">
            <span class="avatar-status avatar-online">
              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar">
              <i></i>
            </span>
          </a>
        </li>
      </ul>
      <!-- translation-button-->
      <ul class="dropdown-content" id="translation-dropdown">
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="{{url('lang/en')}}" data-language="en">
            <i class="flag-icon flag-icon-gb"></i>
            English
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="{{url('lang/fr')}}" data-language="fr">
            <i class="flag-icon flag-icon-fr"></i>
            French
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="{{url('lang/pt')}}" data-language="pt">
            <i class="flag-icon flag-icon-pt"></i>
            Portuguese
          </a>
        </li>
        <li class="dropdown-item">
          <a class="grey-text text-darken-1" href="{{url('lang/de')}}" data-language="de">
            <i class="flag-icon flag-icon-de"></i>
            German
          </a>
        </li>
      </ul>
      <!-- notifications-dropdown-->
      <ul class="dropdown-content" id="notifications-dropdown">
        <li>
          <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
        </li>
        <li class="divider"></li>
        <li>
          <a class="black-text" href="#!">
            <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>
            A new order has been placed!
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
        </li>
        <li>
          <a class="black-text" href="#!">
            <span class="material-icons icon-bg-circle red small">stars</span>
            Completed the task
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
        </li>
        <li>
          <a class="black-text" href="#!">
            <span class="material-icons icon-bg-circle teal small">settings</span>
            Settings updated
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
        </li>
        <li>
          <a class="black-text" href="#!">
            <span class="material-icons icon-bg-circle deep-orange small">today</span>
            Director meeting started
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
        </li>
        <li>
          <a class="black-text" href="#!">
            <span class="material-icons icon-bg-circle amber small">trending_up</span>
            Generate monthly report
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
        </li>
      </ul>
      <!-- profile-dropdown-->
      <ul class="dropdown-content" id="profile-dropdown">
        <li>
          <a class="grey-text text-darken-1" href="{{asset('user-profile-page')}}">
            <i class="material-icons">person_outline</i>
            Profile
          </a>
        </li>
        <li>
          <a class="grey-text text-darken-1" href="{{asset('app-chat')}}">
            <i class="material-icons">chat_bubble_outline</i>
            Chat
          </a>
        </li>
        <li>
          <a class="grey-text text-darken-1" href="{{asset('page-faq')}}">
            <i class="material-icons">help_outline</i>
            Help
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="grey-text text-darken-1" href="{{asset('user-lock-screen')}}">
            <i class="material-icons">lock_outline</i>
            Lock
          </a>
        </li>
        <li>
          <a class="grey-text text-darken-1" href="{{asset('user-login')}}">
            <i class="material-icons">keyboard_tab</i>
            Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- BEGIN: Horizontal nav start-->
  <nav class="white hide-on-med-and-down" id="horizontal-nav" style="display: none;">
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
        {{-- Foreach menu item starts --}}
        @if(!empty($menuData[1]) && isset($menuData[1]))
          @foreach ($menuData[1]->menu as $menu)
            @php
            $custom_classes="";
            if(isset($menu->class))
            {
            $custom_classes=$menu->class;
            }
            @endphp
          <li>
            <a @if(isset($menu->submenu)){{'class=dropdown-menu'}} @endif href="{{$menu->url}}" data-target="{{$menu->activate}}">
              <i class="material-icons">{{$menu->icon}}</i>
              <span>
                <span class="dropdown-title">{{ __('locale.'.$menu->name)}}</span>
                @isset($menu->submenu)
                <i class="material-icons right">keyboard_arrow_down</i>
                @endisset
              </span>
            </a>
            @if(isset($menu->submenu))
              @include('panels.horizontalSubmenu',['menu' => $menu->submenu],['activate'=>$menu->activate])
            @endif
          </li>
          @endforeach
        @endif
      </ul>
    </div>
    <!-- END: Horizontal nav start-->
  </nav>
</div>
<script>
  function submenu() {
  var x = document.getElementById("horizontal-nav");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>