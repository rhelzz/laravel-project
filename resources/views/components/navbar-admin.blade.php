<div class="sb-sidenav-menu">
    <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        <a class="nav-link" href="dashboard/skill">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-bolt-lightning"></i></i></div>
            Skill
        </a>
        <a class="nav-link" href="{{ route('admin.tables') }}">
            <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
            Tabel User
        <a class="nav-link" href="{{ route('admin.tabelkonten') }}"> <!-- Link to Tabel Konten -->
            <div class="sb-nav-link-icon"><i class="fa-solid fa-table"></i></div>
            Tabel Konten
        </a>
        </a><a class="nav-link" href="{{ route('admin.add') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
            Add User
        </a><a class="nav-link" href="{{ route('admin.create') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
            Create Content
        </a>
        </a><a class="nav-link" href="{{ route('admin.report') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
            Report
        </a><a class="nav-link" href="{{ route('admin.notifications') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
            Notifications
        </a><a class="nav-link" href="{{ route('admin.data') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-folder"></i></div>
            Data
        </a><a class="nav-link" href="{{ route('admin.help') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-bug"></i></div>
            Help & FAQ
        </a>
        <a href="{{ route('logout') }}" class="nav-link" 
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
        style="text-decoration: none;">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
            {{ __('Log Out') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>