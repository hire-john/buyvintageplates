       <div id="top-nav-bar">
        <div id="top-nav-bar-content" style="position:relative; top: 16px; margin:0px 10px;">
            <nav class="navbar navbar-light">
              <div class="container-fluid">
                <button class="btn btn-success text-white" id="sidebarToggle">Menu</button>
                <div class="dropdown d-flex">
                    <button class="btn btn-success text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/images/default-avatar.jpeg" style="width:25px; position:relative; top: -2px;" class="rounded-circle">
                      {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                      <li><a class="dropdown-item" href="{{ route('profile') }}">My Account</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

  </div>
</div>