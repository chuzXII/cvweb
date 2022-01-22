
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">cessta</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">ct</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item {{ request()->is('dashboard') ? 'active':'' }}">
                <a href="/dashboard " class="nav-link"><i class="fas fa-dragon"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item {{request()->is('tableproject') ? 'active':''}}">
                <a href="/tableproject" class="nav-link"><i class="far fa-file-alt"></i></i><span>Table Project</span></a>
              </li>
              <li class="nav-item {{request()->is('tableuser') ? 'active':''}}">
                <a href="/tableuser" class="nav-link"><i class="far fa-file-alt"></i></i><span>Table User</span></a>
              </li>
            </ul>
        </aside>
      </div>