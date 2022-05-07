<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
                <h2 class="mb-0">Pendaftaran</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index-2.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Pendaftaran</span>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <form action="<?= base_url() ?>pendaftaran/proses_tambah" method="post">
            <?php if ($this->session->flashdata('pesan')) { ?>
                <div class="alert alert-<?= $this->session->flashdata('type'); ?>" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>
            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" id="nama_lengkap" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input name="nik" type="text" id="nik" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="pword">Alamat</label>
                        <input name="alamat" type="text" id="alamat" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="pword2">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="pword2">Pengalaman Mengajar</label>
                        <select name="pengalaman" id="pengalaman" class="form-control form-control-lg">
                            <option value="" disabled selected>-- Pilih -- </option>
                            <?php foreach ($data_nilai_pengalaman as $pengalaman) { ?>
                                <option value="<?= $pengalaman['crips'] ?>"><?= $pengalaman['crips'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pword2">Pendidikan Terakhir</label>
                        <select name="pendidikan" id="pendidikan" class="form-control form-control-lg">
                            <option value="" disabled selected>-- Pilih -- </option>
                            <?php foreach ($data_nilai_pendidikan as $pendidikan) { ?>
                                <option value="<?= $pendidikan['crips'] ?>"><?= $pendidikan['crips'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pword2">Gaji</label>
                        <select name="gaji" id="gaji" class="form-control form-control-lg">
                            <option value="" disabled selected>-- Pilih -- </option>
                            <?php foreach ($data_nilai_gaji as $gaji) { ?>
                                <option value="<?= $gaji['crips'] ?>"><?= $gaji['crips'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input name="usia" type="text" id="usia" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                </div>
            </div>

        </form>

    </div>
</div>
</div>