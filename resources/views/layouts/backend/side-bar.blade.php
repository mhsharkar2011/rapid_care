<div class="col-2 leftMenu">
    <ul class="sidebar navbar-nav">
        <li class="nav-item {{ Request::is('admin/dashboard') ? 'active':'' }}">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        {{-- User Menu --}}
        @auth
        <li class="nav-item dropdown {{ Request::is('admin/users*','admin/users/create') ? 'active':'' }}">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('admin.users.index') }}">All User</a>
            <a class="dropdown-item" href="{{ route('admin.users.create') }}">Add New User</a>
          </div>
        </li>
        <li class="nav-item {{ Request::is('admin/employees*')?'active':'' }}">
          <a class="nav-link" href="{{ route('admin.employees.index') }}">
            <i class="fa-solid fa-user-doctor"></i>
            <span>Employees</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/doctors*')?'active':'' }}">
          <a class="nav-link" href="{{ route('admin.doctors.index') }}">
            <i class="fa-solid fa-user-doctor"></i>
            <span>Doctors</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/patients*')?'active':'' }}">
          <a class="nav-link" href="{{ route('admin.patients.index') }}">
            <i class="fa-solid fa-user-group"></i>
            <span>Patients</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/appointments*')?'active':'' }}">
          <a class="nav-link" href="{{ route('admin.appointments.index') }}">
            <i class="fa-solid fa-user-group"></i>
            <span>Appointment</span></a>
        </li>

        <li class="nav-item {{ Request::is('admin/user-access')?'active':'' }}">
          <a class="nav-link" href="{{ route('admin.user-access') }}">
            <i class="fa-solid fa-user-group"></i>
            <span>Setting</span></a>
        </li>
        @endauth
      </ul>

</div>