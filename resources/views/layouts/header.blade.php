<div class="header header-one">
  <a href="main"
    class="d-inline-flex d-sm-inline-flex align-items-center d-md-inline-flex d-lg-none align-items-center device-logo">
    <img src="assets/img/logo-small.png" class="img-fluid logo2" style="height: inherit" alt="Logo">
  </a>
  <div class="main-logo d-inline float-start d-lg-flex align-items-center d-none d-sm-none d-md-none">
    <div class="logo-color">
      <a href="main">
        <img src="assets/img/logo-white.png" class="img-fluid logo-blue" alt="Logo">
      </a>
      <a href="main">
        <img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="Logo">
      </a>
    </div>
  </div>

  <a href="javascript:void(0);" id="toggle_btn">
    <span class="toggle-bars">
      <span class="bar-icons"></span>
      <span class="bar-icons"></span>
      <span class="bar-icons"></span>
      <span class="bar-icons"></span>
    </span>
  </a>

  <a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
  </a>


  <ul class="nav nav-tabs user-menu">


    <li class="nav-item dropdown">
      <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
        <span class="user-img">
          <img src="assets/img/profiles/avatar-07.jpg" alt="img" class="profilesidebar">
          <span class="animate-circle"></span>
        </span>
        <span class="user-content">
          @if (Auth::user()->role == 1)
            <span class="user-name">Admin</span>
          @elseif(Auth::user()->role == 2)
            <span class="user-name">Purchase</span>
          @else
            <span class="user-name">Karyawan</span>
          @endif
          <span class="user-details">{{ Auth::user()->name }}</span>
        </span>
      </a>
      <div class="dropdown-menu menu-drop-user">
        <div class="profilemenu">
          <div class="subscription-logout">
            <ul>
              <li class="pb-0">
                <form method="POST" action="{{ route('actionlogout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item  has-arrow dropdown-heads ">
      <a href="javascript:void(0);" class="win-maximize">
        <i class="fe fe-maximize"></i>
      </a>
    </li>
  </ul>
</div>
