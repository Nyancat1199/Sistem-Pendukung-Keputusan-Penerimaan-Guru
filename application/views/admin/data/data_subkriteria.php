<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data SubKriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data SubKriteria</li>
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
                        
                        <button onClick="tambah_subkriteria('<?= base_url() ?>subkriteria/proses_tambah/<?= $this->uri->segment(3); ?>')" type="button" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#tambahsub"><i class="fa fa-plus"></i>&nbspTambah Sub Kriteria</button>
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
                                    <th>Sub Kriteria</th>
                                    <th>Nilai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_sub_kriteria as $row) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row['crips'] ?></td>
                                        <td><?= $row['nilai_sub'] ?></td>
                                        <td>
                                            <center>
                                                <button onClick="update_subkriteria('<?= base_url() ?>subkriteria/proses_update/<?= $this->uri->segment(3) ?>','<?= $row['id_subkriteria'] ?>','<?= $row['crips'] ?>','<?= $row['nilai_sub'] ?>',)" data-tool="tooltip" title="Ubah Sub Kriteria" data-toggle="modal" data-target="#tambahsub" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                                <button onClick="delete_subkriteria('<?= base_url() ?>subkriteria/proses_delete/<?= $row['id_subkriteria'] ?>/<?= $row['id_kriteria'] ?>')" data-toggle="modal" data-tool="tooltip" title="Hapus Sub Kriteria" data-target="#deletesub" class="btn btn-default"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="tambahsub" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <form action="" id="form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="">Sub Kriteria</label>
                            <input type="hidden" id="id_subkriteria" name="id_subkriteria">
                            <input type="text" class="form-control" name="sub_kriteria" id="sub_kriteria">
                        </div>
                        <div class="form-group">
                            <label for="">Nilai</label>
                            <input type="text" class="form-control" name="nilai" id="nilai">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deletesub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titledelete">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda Yakin Ingin menghapus Data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-primary" id="btnhapus">Hapus Data</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>