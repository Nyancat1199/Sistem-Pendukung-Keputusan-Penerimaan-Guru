        <div class="site-blocks-cover">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12" style="position: relative;" data-aos="fade-up">
                        <img src="<?= base_url() ?>assets/homee/images/bocah.png" style="height: 600px;" alt="Image" class="img-fluid img-absolute">
                        <div class="row mb-4">
                            <div class="col-lg-4 mr-auto">
                                <h1>Pendaftaran Guru</h1>
                                <p class="mb-5">Masukan data yang ada di formulir pendaftaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <?php if ($data_buka['status'] == 1) { ?>
                    <?php if ($this->session->userdata('id_users') != null) { ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 mb-5">
                                <form action="<?= base_url() ?>pendaftaran/proses_tambah" class="p-5 bg-white" enctype="multipart/form-data" method="POST">
                                    <h2 class="h4 text-black mb-5">Formulir Pendaftaran</h2>
                                    <?php if ($this->session->flashdata('pesan')) {  ?>
                                        <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
                                        <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                                        <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                                    <?php } ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black" for="fname">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap" id="fname" class="form-control rounded-0" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">NIK</label>
                                                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="16" minlength="16" name="nik" id="nik" class="form-control rounded-0">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">NUPTK</label>
                                                <input type="radio" onChange="filter_nuptk()" style="margin-left: 30px;" class="form-group " value="yes" name="choice_nuptk" id="y_nuptk" class="form-control rounded-0">
                                                <label class="text-black" for="email">Ada</label>
                                                <input type="radio" onChange="filter_nuptk()"  style="margin-left: 15px;" class="form-group" value="no" name="choice_nuptk" id="t_nuptk"  class="form-control rounded-0">
                                                <label class="text-black" for="email">Tidak Ada</label>
                                                <input type="number" hidden name="nuptk" id="nuptk" class="form-control rounded-0" placeholder="No NUPTK">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">E-Mail</label>
                                                <input type="email" name="email" id="email" class="form-control rounded-0">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">Alamat</label>
                                                <input type="text" name="alamat" id="alamat" class="form-control rounded-0">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">No Telp</label>
                                                <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="12" name="no_telp" id="no Telp" class="form-control rounded-0">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="email">Tanggal Lahir</label>
                                                <input type="date" onChange="filterByTglLahir()" name="tgl_lahir" id="tgl_lahir" class="form-control rounded-0">
                                                <p id="tgl_filter" hidden style="color:red"></p>
                                                <input type="number" hidden id="h_usia" name="h_usia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black" for="email">Pengalaman Mengajar</label>
                                                <select name="pengalaman" id="pengalaman" class="form-control rounded-0">
                                                    <option value="" disabled selected>--Pilih--</option>
                                                    <?php foreach ($data_kriteria_pengalaman as $row) { ?>
                                                        <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-black" for="emailF">Pendidikan Terakhir</label>
                                                <select name="pendidikan" id="pendidikan" class="form-control rounded-0">
                                                    <option value="" disabled selected>--Pilih--</option>
                                                    <?php foreach ($data_kriteria_pendidikan as $row) { ?>
                                                        <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="text-black" for="email">Usia</label>
                                                <select name="usia" id="usia" class="form-control rounded-0">
                                                    <option value="" disabled selected>--Pilih--</option>
                                                    <?php foreach ($data_kriteria_usia as $row) { ?>
                                                        <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div> -->
                                            <div class="form-group" id="bukti_nuptk" hidden>
                                                <label for="exampleInputFile" id="label_nuptk">NUPTK</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="nuptk_surat" type="file" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">CV</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="cv" type="file" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">KTP</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="ktp" type="file" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Ijazah</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="ijazah" type="file" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="tgl_pendaftaran" value="<?= date('d-m-Y') ?>">


                                            <!-- <div class="form-group" style="float: right;">
                                        <input type="submit" value="Daftar" class="btn btn-primary mr-2 mb-2">
                                    </div> -->


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="float: right;">
                                                <input type="submit" value="Daftar" id="btn_daftar" class="btn btn-primary mr-2 mb-2">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-warning" role="alert" style="height: 100px;">
                            <center><b>Login terlebih Dahulu </b><br>
                                Untuk Mengisi Formulir Pendaftaran Guru</center>
                        </div>
                        <form action="<?= base_url() ?>pendaftaran/proses_tambah" class="p-5 bg-white" enctype="multipart/form-data" method="POST">
                            <h2 class="h4 text-black mb-5">Formulir Pendaftaran</h2>
                            <?php if ($this->session->flashdata('pesan')) {  ?>
                                <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
                                <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                                <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="fname" class="form-control rounded-0" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control rounded-0" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">E-Mail</label>
                                        <input type="text" name="email" id="email" class="form-control rounded-0" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control rounded-0" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">No Telp</label>
                                        <input type="text" name="no_telp" id="no Telp" class="form-control rounded-0" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lagir" class="form-control rounded-0" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Pengalaman Mengajar</label>
                                        <select name="pengalaman" id="pengalaman" class="form-control rounded-0" disabled>
                                            <option value="" disabled selected>--Pilih--</option>
                                            <?php foreach ($data_kriteria_pengalaman as $row) { ?>
                                                <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">Pendidikan Terakhir</label>
                                        <select name="pendidikan" id="pendidikan" class="form-control rounded-0" disabled>
                                            <option value="" disabled selected>--Pilih--</option>
                                            <?php foreach ($data_kriteria_pendidikan as $row) { ?>
                                                <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">Usia</label>
                                        <select name="usia" id="usia" class="form-control rounded-0" disabled>
                                            <option value="" disabled selected>--Pilih--</option>
                                            <?php foreach ($data_kriteria_usia as $row) { ?>
                                                <option value="<?= $row['crips'] ?>"><?= $row['crips'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">CV</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="cv" type="file" class="custom-file-input" id="exampleInputFile" disabled>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">KTP</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="ktp" type="file" class="custom-file-input" id="exampleInputFile" disabled>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ijazah</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="ijazah" type="file" class="custom-file-input" id="exampleInputFile" disabled>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                <?php } else { ?>
                    <?php if ($this->session->flashdata('pesan')) {  ?>
                        <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
                        <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                        <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                    <?php } ?>
                    <div class="alert alert-warning" role="alert" style="height: 100px;">
                        <center><b>Maaf, Pendaftaran Guru di TK Amalia Sudah Ditutup <br>
                                Bagi yang sudah mendaftar silahkan melihat Hasil Pendaftaran di Informasi Pendaftaran</b></center>
                    </div>
                <?php } ?>

            </div>
        </div>