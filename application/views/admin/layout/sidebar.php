<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>/assets/homee/images/lambang3.PNG" alt="AdminLTE Logo" style="background-size: cover;" class="brand-image img-circle elevation-3" style="height: 100px; width:50px">
        <span class="brand-text font-weight-light"><strong>TK AMALIA</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/homee/images/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if ($this->session->userdata('admin')) {  ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dashboard/data_kriteria" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                Data Kriteria
                            </p>
                        </a>
                    </li>

                <?php } ?>
                <?php if ($this->session->userdata('admin')) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dashboard/data_verifikasi_pendaftaran" class="nav-link">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                                Verifikasi Data
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dashboard/data_pendaftaran" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Data Pendaftaran
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dashboard/jadwal_wawancara" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Jadwal Wawancara
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Metode
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="<?= base_url() ?>Dashboard/data_akhir" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Penilaian</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>Dashboard/data_nilai" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Perhitungan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php if ($this->session->userdata('kepsek')) {  ?>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>Dashboard/data_wawancara" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Wawancara & Kepribadian
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dashboard/data_laporan" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Laporan
                            </p>
                        </a>
                    </li>
                <?php } ?>

                <li class="nav-item">
                    <a href="<?= base_url() ?>login/proses_logout" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>