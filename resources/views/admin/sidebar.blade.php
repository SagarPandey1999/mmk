<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
      <div class="user-image">
        <img src="{{ asset('admin/images/MMK-LOGO-PNG.png')}}" style="width: 81px;
        height: 60px;">
      </div>
      <div class="user-name">
         {{-- Sagar Pandey --}}
      </div>
      <div class="user-designation">
          
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link {{ route('users') == url()->current() ? 'active' : '' }}" href="{{ route('users') }}">
          <i class="fa fa-user menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ route('contacts') == url()->current() ? 'active' : '' }}" href="{{ route('contacts') }}">
          <i class="fa fa-phone menu-icon"></i>
          <span class="menu-title">Contact</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ route('company') == url()->current() ? 'active' : '' }}" href="{{ route('company') }}">
          <i class="fa fa-building menu-icon"></i>
          <span class="menu-title">Company</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ route('services') == url()->current() ? 'active' : '' }}" href="{{ route('services') }}">
          <i class="fa fa-cogs menu-icon"></i>
          <span class="menu-title">Service</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ route('map') == url()->current() ? 'active' : '' }}" href="{{ route('map') }}">
          <i class="fa fa-map menu-icon"></i>
          <span class="menu-title">Map</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-disc menu-icon"></i>
          <span class="menu-title">UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="icon-pie-graph menu-icon"></i>
          <span class="menu-title">Charts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="icon-command menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/feather-icons.html">
          <i class="icon-help menu-icon"></i>
          <span class="menu-title">Icons</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="docs/documentation.html">
          <i class="icon-book menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
  </nav>