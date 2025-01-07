<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #3C4B64">
    <!-- Brand Logo -->
    {{-- <a href="../../index3.html" class="brand-link">
      <img src="{{asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')}}" alt="SIABDES logo" class="brand-image elevation-3" style="opacity: 0.8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user (optional) -->
        <div class="mt-3 pb-3 d-flex">
            <div>
            <a href="/dashboard"><img src="{{asset('BUMDES/assets/logo/logo-siabdes.png')}}" class=" elevation-2" width="200px" height="60px" alt="SIABDES Logo"></a>
            </div>
        </div>
        <div class="pb-3 mb-3 d-flex">
            <div>
            <a href="/dashboard"><img src="{{asset('BUMDES/assets/logo/logo-btp-png.png')}}" class="elevation-2" width="200px" height="60px" alt="BTP Logo"></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jurnal_umum" class="nav-link">
                    <p>Jurnal Umum</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Jurnal Khusus
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pembelian" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/penjualan" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Penjualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pemasukan_kas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pemasukan Kas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengeluaran_kas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pengeluaran Kas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/buku_besar" class="nav-link">
                    <p>Buku Besar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/wtb" class="nav-link">
                    <p>Working Trial Balance</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Laporan Keuangan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/laba_rugi" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Laba Rugi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/posisi_keuangan" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Posisi Keuangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/calk" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Catatan Atas Laporan Keuangan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Invoice
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/form_permintaan_kas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Formulir Permintaan Kas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/form_purchase_order" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Formulir Purchase Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/form_pengiriman_barang" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Formulir Pengiriman Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/invoice_penjualan_tunai" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoice Penjualan Tunai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/invoice_penjualan_kredit" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoice Penjualan Kredit</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Data Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/barang" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vendor" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Vendor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kode_rekening" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kode Rekening</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
