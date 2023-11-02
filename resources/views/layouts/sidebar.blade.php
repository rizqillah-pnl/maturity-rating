<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
        <img src="{{ asset('logo.png') }}" alt="SISURAT Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-light">Maturity Rating BLU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="bi bi-person-fill text-white" style="font-size: 30px;"></i>
            </div>
            <div class="info">
                <a href="{{ url('/dashboard') }}" class="d-block">Administrator</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item {{ request()->getRequestUri() == '/dashboard' ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}"
                        class="nav-link {{ request()->getRequestUri() == '/dashboard' ? 'active text-white' : '' }}">
                        <i class="nav-icon bi bi-house-door text-white"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ str_contains(request()->getRequestUri(), 'maturity_rating') ? 'active' : '' }}">
                    <a href="{{ url('maturity_rating') }}"
                        class="nav-link {{ str_contains(request()->getRequestUri(), 'maturity_rating') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-info-circle"></i>
                        <p>
                            Aspek Maturity Rating
                        </p>
                    </a>
                </li>

                <li class="nav-header">DATA MASTER</li>
                <li
                    class="nav-item {{ in_array(request()->getRequestUri(), ['/keuangan', '/pelayanan', '/kapabilitas_internal', '/tata_kk', '/inovasi', '/lingkungan']) ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array(request()->getRequestUri(), ['/keuangan', '/pelayanan', '/kapabilitas_internal', '/tata_kk', '/inovasi', '/lingkungan']) ? 'active' : '' }}">
                        <i class="nav-icon bi bi-bar-chart-steps"></i>
                        <p>
                            ASPEK MATURITAS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    {{-- , '/pelayanan', '/kapabilitas_internal', '/tata_kk', '/inovasi', '/lingkungan' --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('keuangan') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'keuangan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Keuangan
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pelayanan') }}"
                                class="nav-link  {{ str_contains(request()->getRequestUri(), 'pelayanan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Pelayanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kapabilitas_internal') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'kapabilitas_internal') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Kapabilitas Intern
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('tata_kk') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'tata_kk') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Kepemimpinan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('inovasi') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'inovasi') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Inovasi
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'lingkungan') ? 'active' : '' }}">
                            <a href="{{ url('lingkungan') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'lingkungan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Aspek Lingkungan
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item {{ str_contains(request()->getRequestUri(), 'variabel_maturity') ? 'active' : '' }}">
                    <a href="{{ url('variabel_maturity') }}"
                        class="nav-link {{ str_contains(request()->getRequestUri(), 'variabel_maturity') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-activity"></i>
                        <p>
                            Variabel Maturity
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ str_contains(request()->getRequestUri(), 'rangkuman_hasil') ? 'active' : '' }}">
                    <a href="{{ url('rangkuman_hasil') }}"
                        class="nav-link {{ str_contains(request()->getRequestUri(), 'rangkuman_hasil') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-activity"></i>
                        <p>
                            Rangkuman Hasil
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ str_contains(request()->getRequestUri(), 'dokumen_pendukung') ? 'active' : '' }}">
                    <a href="{{ url('dokumen_pendukung') }}"
                        class="nav-link {{ str_contains(request()->getRequestUri(), 'dokumen_pendukung') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-activity"></i>
                        <p>
                            Dokumen Pendukung
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ str_contains(request()->getRequestUri(), 'rekap_data') ? 'active' : '' }}">
                    <a href="{{ url('rekap_data') }}"
                        class="nav-link {{ str_contains(request()->getRequestUri(), 'rekap_data') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-activity"></i>
                        <p>
                            Rekap Seluruh Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <button class="nav-link btn text-left logout-btn ml-1"
                            onclick="return confirm('Anda yakin untuk logout!')" style="border: 0; color: #c2c7d0;">
                            {{-- <i class="nav-icon fas fa-solid fa-right-from-bracket"></i> --}}
                            <i class="nav-icon bi bi-box-arrow-right"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>
                {{-- <li
                    class="nav-item {{ in_array(request()->getRequestUri(), ['/hasil_keuangan', '/hasil_pelayanan', '/hasil_kapabilitas_internal', '/hasil_tata_kk', '/hasil_inovasi', '/hasil_lingkungan']) ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array(request()->getRequestUri(), ['/hasil_keuangan', '/hasil_pelayanan', '/hasil_kapabilitas_internal', '/hasil_tata_kk', '/hasil_inovasi', '/hasil_lingkungan']) ? 'active' : '' }}">
                        <i class="nav-icon bi bi-activity"></i>
                        <p>
                            DATA HASIL
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_maturity') ? 'menu-open' : '' }}">
                            <a href="{{ url('hasil_maturity') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_maturity') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Result Maturity
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_keuangan') ? 'menu-open' : '' }}">
                            <a href="{{ url('hasil_keuangan') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_keuangan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Keuangan
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_pelayanan') ? 'active' : '' }}">
                            <a href="{{ url('hasil_pelayanan') }}"
                                class="nav-link  {{ str_contains(request()->getRequestUri(), 'hasil_pelayanan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Pelayanan
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_kapabilitas_internal') ? 'active' : '' }}">
                            <a href="{{ url('hasil_kapabilitas_internal') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_kapabilitas_internal') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Kapabilitas Intern
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_tata_kk') ? 'active' : '' }}">
                            <a href="{{ url('hasil_tata_kk') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_tata_kk') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Kepemimpinan
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_inovasi') ? 'active' : '' }}">
                            <a href="{{ url('hasil_inovasi') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_inovasi') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Inovasi
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ str_contains(request()->getRequestUri(), 'hasil_lingkungan') ? 'active' : '' }}">
                            <a href="{{ url('hasil_lingkungan') }}"
                                class="nav-link {{ str_contains(request()->getRequestUri(), 'hasil_lingkungan') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p>
                                    Hasil Lingkungan
                                </p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-header">ADMINISTRATOR</li>
                <li class="nav-item">
                    <a href="{{ url('users') }}" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-header">CONFIGURATION</li>
                <li class="nav-item">
                    <a href="{{ route('profile.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-person"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('faq') }}" class="nav-link">
                        <i class="nav-icon bi bi-info-circle"></i>
                        <p>FAQ</p>
                    </a>
                </li> --}}


                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                @push('css-script')
                    <style>
                        .logout-btn:hover {
                            background-color: red;
                            color: white !important;
                        }
                    </style>
                @endpush
                {{-- <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <button href="#" class="nav-link btn text-left logout-btn"
                            onclick="return confirm('Anda yakin untuk logout!')" style="border: 0;">
                            <i class="nav-icon bi bi-box-arrow-right"></i>
                            <p>
                                Logout
                            </p>
                        </button>
                    </form>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
