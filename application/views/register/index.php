<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-11/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 08:45:52 GMT -->

<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/register/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/register/css/A.style.css.pagespeed.cf.69oUKoK-5A.css" />
    <link href="<?= base_url() ?>assets/homee/images/lambang_transparan.png" rel="shortcut icon">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <center>
                            <img src="<?= base_url() ?>assets/homee/images/lambang_transparan.png" height="100" class="mb-3" alt="">
                            <!-- <span class="fa fa-user-o"></span> -->
                        </center>
                        <h3 class="text-center mb-4">Register</h3>
                        <?php if ($this->session->flashdata('pesan')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                                <?= $this->session->flashdata('pesan') ?>
                            </div>
                        <?php } ?>
                        <form action="<?= base_url() ?>register/proses_register" class="login-form" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control rounded-left" placeholder="Nama Lengkap" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" />
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="confirpass" class="form-control rounded-left" placeholder="Confirm Password" />
                            </div>
                            <div class="form-group">
                                <button type="submit" style="background: #00d2b5;" class="form-control btn btn-primary rounded submit px-3">
                                    Register
                                </button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <a href="<?= base_url() ?>home/alur_pendaftaran">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url() ?>assets/register/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/register/js/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.XLbJotJFQf.js"></script>
    <script>
        eval(mod_pagespeed_WElkAsjnxY);
    </script>
    <script>
        eval(mod_pagespeed_CLCu_pXgaN);
    </script>
    <script>
        eval(mod_pagespeed_h$EL5JhDnb);
    </script>
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65c916081f4fd942","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-11/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 08:46:04 GMT -->

</html>