<ul class="sidebar-menu">

    <li class="dropdown @yield('dashboard')">
      <a href="/admin/home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
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
    <li class="dropdown @yield('galleries')">
        <a href="{{ route('galleries.index') }}" ><i
            data-feather="briefcase"></i><span>Galereya</span></a>
    </li>
    <li class="dropdown @yield('categories')">
        <a href="{{ route('categories.index') }}" ><i
            data-feather="briefcase"></i><span>Kategoriyalar</span></a>
    </li>
    <li class="dropdown @yield('posts')">
        <a href="{{ route('posts.index') }}" ><i
            data-feather="briefcase"></i><span>Maqolalar</span></a>
    </li>
    <li class="dropdown">
        <a href="#" ><i
            data-feather="briefcase"></i><span></span></a>
    </li>
    <li class="dropdown @yield('numbers')">
        <a href="{{ route('numbers.index') }}" ><i
            data-feather="briefcase"></i><span>Raqamlar</span></a>
    </li>
    <li class="dropdown @yield('humans')">
        <a href="{{ route('humans.index') }}" ><i
            data-feather="briefcase"></i><span>Mijozlar</span></a>
    </li>

</ul>
