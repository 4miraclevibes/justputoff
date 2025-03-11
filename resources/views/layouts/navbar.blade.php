        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="/" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/img/its.png') }}" alt="Donor Darah Logo" style="height: 60px; width: auto;">
                        </div>
                    </span>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1 mt-3 border-top">
                <!-- Dashboard -->
                <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-home"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
                <!-- Users -->
                <li class="menu-item {{ Route::is('users*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-user"></i>
                        <div data-i18n="Users">Users</div>
                    </a>
                </li>
                <!-- Projects -->
                <li class="menu-item {{ Route::is('projects*') ? 'active' : '' }}">
                    <a href="{{ route('projects.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-folder"></i>
                        <div data-i18n="Projects">Projects</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->
