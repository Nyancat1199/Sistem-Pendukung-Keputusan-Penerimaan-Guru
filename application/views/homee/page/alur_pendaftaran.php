<div class="site-blocks-cover">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12" style="position: relative;" data-aos="fade-up ">
                <img src="<?= base_url() ?>assets/homee/images/bocah.png" style="height: 600px;" alt="Image" class="img-fluid img-absolute">
                <div class="row mb-4 mt-5">
                    <div class="col-lg-4 mr-auto">
                        <h1>Alur Penerimaan</h1>
                        <p class="mb-5">sebelum melakukan pendafataran ketahuilah tahap - tahap dalam penerimaan guru</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-5">
                <?php if ($this->session->flashdata('pesan')) {  ?>
                    <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
                    <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                    <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                <?php } ?>
                <form action="#" class="p-5 bg-white">
                    <div class="row mb-5">
                        <div class="col-md-1" style="margin:auto;">
                            <button class="btn btn-primary" style="border-radius: 50%; width:100px; height:100px; font-size:40px;">1</button>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url() ?>assets/homee/images/alur_login.png" width="350" height="250" alt="" style="display:block; margin-right:auto; margin-left:auto;" srcset="">
                        </div>
                        <div class="col-md-6">
                            <h2></h2>
                            <p class="mt-5">untuk melakukann pendaftaran guru diharuskan login terlebih dahulu, jika belum mempunyai akun bisa mendaftar di
                                <?php if ($this->session->userdata('id_users')) { ?>
                                    <a href="#">https//tkamalia.com/register</a>
                                <?php } else { ?>
                                    <a href="<?= base_url() ?>home/register">https//tkamalia.com/register</a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-1" style="margin:auto;">
                            <button class="btn btn-primary" style="border-radius: 50%; width:100px; height:100px; font-size:40px;">2</button>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url() ?>assets/homee/images/alur_formulir.png" width="350" height="250" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <p class="mt-4">Mengisi formuli pendaftaran guru secara online di <a href="<?= base_url() ?>home/pendaftaran_guru">https://tkamalia.com/pendaftaran</a></p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-1" style="margin:auto;">
                            <button class="btn btn-primary" style="border-radius: 50%; width:100px; height:100px; font-size:40px;">3</button>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url() ?>assets/homee/images/alur_verif2.png" width="350" height="250" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <p class="mt-4">Pihak sekolah melakukan pengecekan berkas yang sudah di input di formulir pendaftaran guru </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-1" style="margin:auto;">
                            <button class="btn btn-primary" style="border-radius: 50%; width:100px; height:100px; font-size:40px;">4</button>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url() ?>assets/homee/images/alur_wawancara.png" width="350" height="200" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <p class="mt-4">Calon guru malakukan wawancara berdasarkan waktu yang telah ditentukan oleh TK Amalia</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-1" style="margin:auto;">
                            <button class="btn btn-primary" style="border-radius: 50%; width:100px; height:100px; font-size:40px;">5</button>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url() ?>assets/homee/images/alur_hasil.png" width="350" height="250" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <?php if ($this->session->userdata('id_users')) { ?>
                                <?php if ($data_pendaftaran != null) { ?>
                                    <p class="mt-4">Melihat Hasil penerimaan guru pada secara online di laman situs TK Amalia <a href="<?= base_url() ?>home/info_pendaftaran">tkamalia.com/info_pendaftaran</a></p>
                                <?php } else { ?>
                                    <p class="mt-4">Melihat Hasil penerimaan guru pada secara online di laman situs TK Amalia <a href="<?= base_url() ?>pendaftaran/tidak_terdaftar">tkamalia.com/info_pendaftaran</a></p>
                                <?php } ?>
                            <?php } else { ?>
                                <p class="mt-4">Melihat Hasil penerimaan guru pada secara online di laman situs TK Amalia <a href="<?= base_url() ?>pendaftaran/tidaklogin">tkamalia.com/info_pendaftaran</a></p>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>