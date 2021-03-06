<ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ URL('storage/images/faces/face1.jpg') }}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
          <span class="text-secondary text-small">
            @if (Auth::user()->role == 1)
              @php
                  $role = "Admin";
              @endphp
            @elseif (Auth::user()->role == 2)
              @php
                $role = "Employer";
              @endphp
            @elseif (Auth::user()->role == 3)
                @php
                    $role = "Jobseeker";
                @endphp
            @endif
            {{ $role }}</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    @if (Auth::user()->role == 1)
    <li class="{{ request()->is('admin/dashboard') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/admin/dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('admin/states') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/admin/states') }}">
        <span class="menu-title">States</span>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('admin/locations') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/admin/locations') }}">
        <span class="menu-title">Locations</span>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('admin/categories') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/admin/categories') }}">
        <span class="menu-title">Categories</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('admin/skills') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/admin/skills') }}">
        <span class="menu-title">Skills</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
      </a>
    </li>
    @elseif (Auth::user()->role == 2)
    <li class="{{ request()->is('employer/dashboard') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/employer/dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('employer/profile/show') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/employer/profile/show') }}">
        <span class="menu-title">Company Profile</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('employer/departments') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/employer/departments') }}">
        <span class="menu-title">Departments</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="{{ request()->is('employer/jobs') ? 'nav-item active' : 'nav-item' }}">
      <a class="nav-link" href="{{ url('/employer/jobs') }}">
        <span class="menu-title">Jobs</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    @endif
  </ul>