<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      {{-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="{{ asset ('') }}coreui/assets/brand/coreui.svg#full"></use>
      </svg> --}}
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="{{ asset ('') }}coreui/assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}">
          <svg class="nav-icon">
            <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
          </svg> Dashboard</a></li>
      <li class="nav-title">Components</li>
      {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset ('') }}coreui/#"> --}}
          {{-- <svg class="nav-icon">
            <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> Categories</a>
        <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('categories.create') }}"><span class="nav-icon"></span> Add Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}"><span class="nav-icon"></span> Categories List</a></li>
        </ul>
      </li> --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset ('') }}coreui/#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Menus</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ route('menus.create') }}"><span class="nav-icon"></span> Add Menus</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('menus.index') }}"><span class="nav-icon"></span> Menus List</a></li>
      </ul>
    </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset ('') }}coreui/#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
          </svg> Tables</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{ route('tables.create') }}"><span class="nav-icon"></span> Add Tables</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('tables.index') }}"><span class="nav-icon"></span> Table List</a></li>
        </ul>
      </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset ('') }}coreui/#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> Reservations</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ route('reservations.create') }}"><span class="nav-icon"></span> Add Reservations</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('reservations.index') }}"><span class="nav-icon"></span> Reservations List</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset ('') }}coreui/#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset ('') }}coreui/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Admin</a>
      <ul class="nav-group-items">
        <li class="nav-item"><form action="{{route('logout')}} " method="POST">@csrf <button type="submit">Logout</button></form></li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('menus.index') }}"><span class="nav-icon"></span> Menus List</a></li> --}}
      </ul>
    </li>

  </div>
