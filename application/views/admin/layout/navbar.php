<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <?php $data_buka = $this->ModelBukaPendaftaran->getDataBy(1); ?>
            <?php if ($this->session->userdata('admin')) { ?>
                <?php if ($data_buka['status'] == 0) { ?>

                    <a href="<?= base_url() ?>dashboard/buka_pendaftaran" class="btn btn-primary">Buka Pendaftaran</a>

                <?php } else { ?>

                    <a href="<?= base_url() ?>dashboard/tutup_pendaftaran" class="btn btn-danger">Tutup Pendaftaran</a>

                <?php } ?>
            <?php } ?>
        </nav>
        <!-- /.navbar -->