<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perhitungan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url() ?>penilaian/hitungNormalisasi" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-success">Hitung Normalisasi</a>
                        <!-- <div class="form-group col-md-2" style="float: right; margin-top:15px;">
                            <select type="text" name="jenis" id="jenis" class="form-control" aria-placeholder="Pilih Jenis">
                                <option value="" disabled selected>-- Gelombang --</option>
                                <?php foreach($gelombang as $glb) { ?>
                                <option value="<?= $glb['gelombang'] ?>"><?= $glb['gelombang'] ?></option>
                                <?php } ?>
                            </select>
                        </div> -->
                    </div>
                   
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if ($this->session->flashdata('pesan')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php  } ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Pendaftar</th>
                                    <th>Pengalaman</th>
                                    <th>Pendidikan</th>
                                    <th>Usia</th>
                                    <th>Kepribadian</th>
                                    <th>Wawancara</th>
                                    <th>Hasil</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_normalisasi as $normalisasi) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $normalisasi['nama_lengkap'] ?></td>
                                        <td><?= $normalisasi['n_pengalaman'] ?></td>
                                        <td><?= $normalisasi['n_pendidikan'] ?></td>
                                        <td><?= $normalisasi['n_usia'] ?></td>
                                        <td><?= $normalisasi['n_kepribadian'] ?></td>
                                        <td><?= $normalisasi['n_wawancara'] ?></td>
                                        <td><?= $normalisasi['n_total'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table><br>
                        <?php if ($this->session->flashdata('nama_lengkap')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                                Jadi Penerimaan guru jatuh Pada <?= $this->session->flashdata('nama_lengkap') ?> dengan nilai <?= $this->session->flashdata('total') ?>
                            </div>
                        <?php  } ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="nilaikriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" id="form" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="keterangan">Wawancara</label>
                        <input type="text" hidden id="id_wawancara" name="id_wawancara">
                        <input type="text" hidden id="id_pendaftaran" name="id_pendaftaran">
                        <select type="text" name="wawancara" id="jenis" class="form-control" aria-placeholder="Pilih Jenis">
                            <option value="" disabled selected>-- Pilih --</option>
                            <?php foreach ($data_kriteria_wawancara as $wawancara) {  ?>
                                <option value="<?= $wawancara['crips'] ?>"><?= $wawancara['crips'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Kepribadian</label>
                        <select type="text" name="kepribadian" id="jenis" class="form-control" aria-placeholder="Pilih Jenis">
                            <option value="" disabled selected>-- Pilih --</option>
                            <?php foreach ($data_kriteria_kepribadian as $kepribadian) {  ?>
                                <option value="<?= $kepribadian['crips'] ?>"><?= $kepribadian['crips'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
    </div>
</div>