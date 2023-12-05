<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="{{ route('beranda') }}"><img src="{{ asset('assets/img/logo_kampus.png') }}"
                    alt=""><span>Kemahasiswaan</span></a></h1> --}}
        <a href="" class="logo me-auto"><img src="{{ asset('assets/img/logokemas.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('assets') }}/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ request()->routeIs('beranda') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li><a class="{{ request()->is('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a>
                </li>
                <li><a class="{{ request()->is('prestasi') ? 'active' : '' }}"
                        href="{{ route('prestasi') }}">Prestasi</a></li>
                <li><a class="{{ request()->is('beasiswa') ? 'active' : '' }}"
                        href="{{ route('beasiswa') }}">Beasiswa</a></li>
                <li><a class="{{ request()->is('ormawa') ? 'active' : '' }}" href="{{ route('ormawa') }}">Ormawa</a>
                </li>
                <li><a class="{{ request()->is('lemawa') ? 'active' : '' }}" href="{{ route('lemawa') }}">Lemawa</a>
                </li>
                <li><a class="{{ request()->is('dokumen') ? 'active' : '' }}"
                        href="{{ route('dokumen') }}">Dokumen</a>
                </li>
                <li><a href="contact.html">Karya Mahasiswa</a></li>

                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="{{ route('login') }}" class="get-started-btn">Login</a>

    </div>
</header>
