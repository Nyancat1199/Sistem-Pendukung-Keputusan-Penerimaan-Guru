<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
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
                    <form action="<?= base_url() ?>dashboard/data_laporan" method="POST">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <?php if ($tanggal['tgl_penerimaan']) {  ?>
                                        <h5 style="font-size: 20px;">Hasil Penerimaan <strong><?= date('d F Y', strtotime($tanggal['tgl_penerimaan'])) ?></strong></h5>
                                    <?php } ?>
                                </div>
                                <div class="col-6">
                                    <?php if ($tanggal['tgl_penerimaan']) {  ?>
                                        <a href="<?= base_url() ?>dashboard/cetaklaporan/<?= $gelombang ?>" target="_blank" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-primary"> <i class="fas fa-file" style="padding-right: 5px;"></i> Cetak</a>
                                    <?php } else { ?>
                                        <a href="<?= base_url() ?>dashboard/data_laporan" style="float: right; margin-top:15px;margin-right:20px;" class="btn btn-primary"><i class="fas fa-file" style="padding-right: 5px;"></i> Cetak</a>
                                    <?php } ?>
                                    <button name="lihatdata" type="submit" style="float: right; margin-top:15px;margin-right:5px;" class="btn btn-success">Lihat Data</button>
                                    <div class="form-group" style="float: right; margin-top:15px; margin-right:5px;">
                                        <select type="text" name="tgl_penerimaan" id="tgl_penerimaan" class="form-control" aria-placeholder="Pilih Jenis">
                                            <option value="" disabled selected>-- Tanggal Penerimaan --</option>
                                            <?php foreach ($tgl_penerimaan as $penerimaan) { ?>
                                                <option value="<?= $penerimaan['gelombang'] ?>"><?= date('d F Y', strtotime($penerimaan['tgl_penerimaan'])) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if ($this->session->flashdata('pesan')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php  } ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Diterima</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tidak Diterima</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>

                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>Nama Pendaftar</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pendaftaran</center>
                                            </th>
                                            <th>
                                                <center> Nilai </center>
                                            </th>
                                            <th>
                                                <center> Hasil Penerimaan </center>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php if ($data_limit) { ?>
                                            <?php $i = 1; ?>

                                            <tr>
                                                <td>
                                                    <center><?= $i++ ?></center>
                                                </td>
                                                <td>
                                                    <center><?= $data_limit['nama_lengkap'] ?></center>
                                                </td>
                                                <td>
                                                    <center><?= date('d F Y', strtotime($data_limit['tgl_pendaftaran'])) ?> </center>
                                                </td>
                                                <td>
                                                    <center><?= $data_limit['n_total'] ?></center>
                                                </td>

                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-outline-success">Diterima</button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>

                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>Nama Pendaftar</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pendaftaran</center>
                                            </th>
                                            <th>
                                                <center> Nilai </center>
                                            </th>
                                            <th>
                                                <center> Hasil Penerimaan </center>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php $i = 1;
                                        foreach ($data_penerimaan as $penerimaan) {  ?>
                                            <tr>
                                                <td>
                                                    <center><?= $i++ ?></center>
                                                </td>
                                                <td>
                                                    <center><?= $penerimaan['nama_lengkap'] ?></center>
                                                </td>
                                                <td>
                                                    <center><?= date('d F Y', strtotime($penerimaan['tgl_pendaftaran'])) ?>  </center>
                                                </td>
                                                <td>
                                                    <center> <?= $penerimaan['n_total'] ?></center>
                                                </td>
                                                <?php if ($data_limit != null) { ?>
                                                    <?php if ($penerimaan['id_pendaftaran'] == $data_limit['id_pendaftaran']) { ?>
                                                        <td>
                                                            <center>
                                                                <button type="button" class="btn btn-outline-success">Diterima</button>
                                                            </center>
                                                        </td>
                                                    <?php } else { ?>
                                                        <td>
                                                            <center>
                                                                <button type="button" class="btn btn-outline-danger">Tidak Diterima</button>
                                                            </center>
                                                        </td>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <?php if ($this->session->flashdata('type')) { ?>
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