<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/home">
                    <img src="{{asset('admin/images/icon/logo1.png')}}" alt="" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route ('karyawankantor.index')}}">
                                <i class="far fa-circle"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="{{ route ('laptopkantor.index')}}">
                                <i class="fas fa-desktop"></i>Data Laptop</a>
                        </li>
                        <li>
                            <a href="{{ route ('kaskantor.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Kas</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>