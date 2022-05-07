<div class="site-blocks-cover mb-3">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12" style="position: relative;" data-aos="fade-up">
                <img src="<?= base_url() ?>assets/homee/images/bocah.png" style="height: 500px;" alt="Image" class="img-fluid img-absolute">
                <div class="row mb-4">
                    <div class="col-lg-4 mr-auto">
                        <h1>Informasi Pendaftaran</h1>
                        <p class="mb-5">Dapatkan informasi tentang pendaftaran anda disini</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light" id="features-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="section-title text-center">Hasil</h1>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-4 mb-lg-4" data-aos="fade-up">
                <div class="list-group">
                    <a href="<?= base_url() ?>home/info_pendaftaran" class="list-group-item list-group-item-action">Wawancara</a>
                    <a href="#" class="list-group-item list-group-item-action active">Penerimaan</a>
                </div>
            </div>
            <div class="col-lg-8 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-block">
                    <?php if ($data_normalisasi != null) { ?>
                        <?php if ($data_nilai != null) { ?>
                            <?php if ($data_nilai['id_pendaftaran'] == $data_normalisasi['id_pendaftaran']) { ?>
                            <p>Selamat Kepada,</p>
                                <table border="1" style="margin:auto;">

                                    <th style="padding-left: 30px; padding-right: 30px; text-align:center">Nama Lengkap</th>
                                    <th style="padding-left: 30px; padding-right: 30px; text-align:center">NIK</th>
                                    <th style="padding-left: 30px; padding-right: 30px; text-align:center">Alamat</th>

                                    <tr style="text-align: center;">
                                        <td style="padding-left: 30px; padding-right: 30px"><?= $data_nilai["nama_lengkap"] ?></td>
                                        <td style="padding-left: 30px; padding-right: 30px;"><?= $data_nilai['nik'] ?></td>
                                        <td style="padding-left: 30px; padding-right: 30px;"><?= $data_nilai['alamat'] ?></td>
                                    </tr>
                                </table>
                            <br><p>Anda diterima sebagai guru di TK AMALIA</p>
                            Silahkan datang ke TK Amalia 
                            <?php } else { ?>
                                Pendaftar atas nama <?= $data_nilai['nama_lengkap'] ?><br><br>
                                Anda tidak diterima sebagai guru di tk amalia <br>
                                Terima Kasih, sudah mau berpartisipasi mendaftar Guru di TK AMALIA

                            <?php } ?>
                        <?php } else { ?>
                            <p>Belum Ada pengumuman penerimaan guru saat ini</p>
                        <?php } ?>
                    <?php } else { ?>
                        <p>Belum Ada pengumuman penerimaan guru saat ini</p>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>