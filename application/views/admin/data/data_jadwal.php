<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jadwal Wawancara</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jadwal Wawancara</li>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_wawancara as $row) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row['nama_lengkap'] ?></td>

                                        <td>
                                            <center>
                                                <button onClick="updatejadwal('<?= base_url() ?>wawancara/tambahjadwal/<?= $row['id_wawancara'] ?>','<?= $row['id_wawancara'] ?>')" data-toggle="modal" data-target="#tambahkriteria" type="button" data-tool="tooltip" title="Atur Jadwal" data-placement="top" class="btn btn-warning"><i class="fa fa-calendar-alt"></i></button>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
<div class="modal fade" id="tambahkriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Jadwal Wawancara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form" method="post">

                    <div class="form-group">
                        <input type="hidden" name="id_wawancara" id="id_wawancara">
                        <label for="keterangan">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Waktu</label>
                        <select type="text" name="waktu" id="waktu" class="form-control" aria-placeholder="Pilih Jenis">
                            <option value="" disabled selected>-- Pilih --</option>
                            <option value="8.30">8.30</option>
                            <option value="10.30">10.30</option>
                            <option value="12.30">12.30</option>
                            <option value="14.30">14.30</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>