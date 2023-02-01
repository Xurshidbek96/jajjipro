<ul class="sidebar-menu">

    <li class="dropdown @yield('dashboard')">
      <a href="/a-panel" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown @yield('groups')">
        <a href="{{ route('groups.index') }}" ><i
            data-feather="briefcase"></i><span>Sinflar</span></a>
    </li>
    <li class="dropdown @yield('teachers')">
      <a href="{{ route('teachers.index') }}" ><i
          data-feather="briefcase"></i><span>O'qituvchilar</span></a>
    </li>
    <li class="dropdown @yield('wins')">
        <a href="{{ route('wins.index') }}" ><i
            data-feather="briefcase"></i><span>Yutuqlar</span></a>
      </li>

</ul>
