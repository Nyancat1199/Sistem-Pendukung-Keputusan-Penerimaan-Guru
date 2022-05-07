<div class="site-blocks-cover mb-3">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12" style="position: relative;" data-aos="fade-up">
                <img src="<?= base_url() ?>assets/homee/images/bocah.png" style="height: 500px;" alt="Image" class="img-fluid img-absolute">
                <div class="row mb-4">
                    <div class="col-lg-4 mr-auto">
                        <h1>Informasi Pendaftaran</h1>
                        <p class="mb-5">Dapatkan Informasi Pendaftaran Guru Anda disini</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light" id="features-section">
    <div class="container">
        <?php if ($data_pendaftaran['is_verified'] != 0) { ?>
            <?php if ($data_pendaftaran['is_verified'] == 1) { ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h1 class="section-title text-center"></h1>
                        <?php if($status_nilai == 0) { ?>
                        <?php if ($is_verif == 0) { ?>
                            <div class="alert alert-info" role="alert" style="height: 100px;">
                                <b>Selamat, Anda Lolos Tahap verifikasi berkas <br>
                                    Silahkan menungunggu Jadwal Wawancara</b>
                            </div>
                        <?php } elseif ($is_verif == 1) { ?>
                            <div class="alert alert-primary" role="alert" style="height: 100px;">
                                <b>Jadwal Wawawcara sudah ditentukan</b><br>
                                Silahkan datang berdasarkan waktu yang ditentukan
                            </div>
                        <?php } elseif ($is_verif == 2) { ?>
                            <div class="alert alert-primary" role="alert" style="height: 100px;">
                                <b>Sudah Melakukan Wawancara</b><br>
                                Tunggu Pengumuman Hasil Penerimaan
                            </div>
                        <?php } ?>
                        <?php }else{ ?>
                            <div class="alert alert-success" role="alert" style="height: 100px;">
                                <b>Hasil Penerimaan sudah keluar <br>
                                    Silahkan melihat hasil penerimaan</b>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-lg-4 mb-lg-4" data-aos="fade-up">
                        <div class="list-group">
                            
                                <a href="#" class="list-group-item list-group-item-action active">Wawancara</a>
                                <a href="<?= base_url() ?>home/info_penerimaan" class="list-group-item list-group-item-action ">Penerimaan</a>
                            
                        </div>

                    </div>
                    <div class="col-lg-8 mb-lg-4" data-aos="fade-up">
                        <!-- <div class="card" style="height: 300px; ">
                        
                    Kepada, nama

                    </div> -->

                        <div class="unit-4">
                            <div>
                                <?php if ($is_verif == 0) {  ?>
                                    <p>Belum Ada Jadwal Wawancara</p>
                                <?php } elseif ($is_verif == 1) { ?>
                                    Kepada <?= $data_wawancara['nama_lengkap'] ?>,<br><br>
                                    Diharapkan datang untuk melakukan wawancara pada: <br><br>
                                    Tanggal : &nbsp;<?= date('d F Y', strtotime($data_wawancara['tanggal'])) ?><br>
                                    Jam &ensp; &ensp; &nbsp; : <?= $data_wawancara['waktu'] ?><br>
                                    Alamat &nbsp;: Jalan setu raya No.2 Rt. 06 Rw. 02 Bintara Jaya, Bekasi (TK Amalia)
                                <?php } elseif ($is_verif == 2) { ?>
                                    Sudah Melakukan Wawancara
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1 class="section-title text-center"></h1>
                            <div class="alert alert-danger" role="alert" style="height: 100px;">
                                <b>Maaf, Anda tidak bisa melanjutkan ke Tahap Selanjutnya, <br>
                                    Dikarenakan Anda tidak Lolos Dalam Tahap Verifikasi Berkas</b>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h1 class="section-title text-center"></h1>
                        <div class="alert alert-warning" role="alert">
                            <b>Mohon tunggu, Berkas Anda sedang diperiksa </b>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>