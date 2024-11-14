    <!-- Menu -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme shadow bg-black">
        <div class="app-brand demo">
            <a href="#" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="{{ Auth::user()->avatar }}" alt="Brand Logo" class="img-fluid" width="65" max-height="65"
                        max-width="65" />
                </span>
                <span
                    class="app-brand-text demo menu-text fw-bolder ms-2 font-sm text-center">{{ Auth::user()->name }}</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-2">
            <!-- Dashboard -->
            <li class="menu-item {{ Route::is('role.dashboard.*') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">My Merchant</span>
            </li>
            <li class="menu-item {{ Route::is('menu.*') ? 'active' : '' }}">
                <a href="{{ route('menu.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-book"></i>
                    <div data-i18n="Course">Menu</div>
                </a>
            </li>
            <li class="menu-item {{ Route::is('riwayatPenjualan.*') ? 'active' : '' }}">
                <a href="{{ route('order.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="FlashSale">Riwayat Penjualan</div>
                </a>
            </li>
            <li class="menu-item {{ Route::is('myProfile.*') ? 'active' : '' }}">
                <a href="{{ route('my-profile') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="FlashSale">My Profile</div>
                </a>
            </li>
        </ul>
    </aside>
    <!-- / Menu -->
