<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">
            <img src="<?= base_url() ?>assets/homee/images/lambang.PNG" width="80px" height="70px" alt="" srcset="" style="float: left; margin-left: 120px; margin-top:-10px;">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-12 main-menu">
                        <nav class="site-navigation justify-content-md-center text-center" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url() ?>home/alur_pendaftaran" class="nav-link">Alur Penerimaan</a></li>
                                <li><a href="<?= base_url() ?>home/pendaftaran_guru" class="nav-link">Pendaftaran</a></li>
                                <?php if ($this->session->userdata('username') == null) { ?>
                                    <li>
                                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modallogin">Login</button>
                                    </li>
                                <?php } else {  ?>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama') ?></a>
                                        <ul class="dropdown-menu">
                                            <?php if ($this->session->userdata('id_users')) { ?>
                                                <?php if ($data_pendaftaran != null ) { ?>
                                                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/info_pendaftaran">Informasi Pendaftaran</a></li>
                                                <?php } else { ?>
                                                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>pendaftaran/tidak_terdaftar">Informasi Pendaftaran</a></li>
                                                <?php } ?>
                                            <?php } ?>
                                            <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>login/proses_logout">Log Out</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>
        </header>

        <!-- Modal -->
        <xdiv class="modal fade bd-example" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?= base_url() ?>login/proses_login" method="POST">
                    <div class="modal-content" style="width: 400px; margin:auto;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" name="username" style="border-radius: 5px;" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="icon-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" style="border-radius: 5px;" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <button type="submit" class="form-control btn btn-primary" style="border-radius: 5px;">Login</button>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <p style="margin:auto; color:black;">Belum Punya Akun?&nbsp;<a href="<?= base_url() ?>home/register">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </xdiv>