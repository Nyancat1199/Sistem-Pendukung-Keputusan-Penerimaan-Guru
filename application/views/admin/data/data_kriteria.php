<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Kriteria</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Kriteria</li>
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
            <button onClick="tambah_kriteria('<?= base_url() ?>kriteria/proses_tambah')" type="button" class="btn btn-success" data-toggle="modal"  data-target="#tambahkriteria" style="float:right;"><i class="fas fa-plus"></i>&nbsp Tambah Kriteria </button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <?php if ($this->session->flashdata('pesan')) { ?>
              <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                <?= $this->session->flashdata('pesan'); ?>
              </div>
            <?php  } ?>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Jenis</th>
                    <th>Bobot</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($data_kriteria as $kriteria) {  ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $kriteria['kriteria'] ?></td>
                      <td><?= $kriteria['jenis'] ?></td>
                      <td><?= $kriteria['bobot'] ?></td>
                      <td>
                        <center>
                          <a href="<?= base_url() ?>dashboard/data_subkriteria/<?= $kriteria['id_kriteria'] ?>" data-tool="tooltip" title="Sub Kriteria" class="btn btn-primary"  id=""><i class="far fa-calendar-alt"></i></a>
                          <button onClick="update_kriteria('<?= base_url() ?>kriteria/proses_update','<?= $kriteria['id_kriteria'] ?>','<?= $kriteria['kriteria'] ?>','<?= $kriteria['jenis'] ?>','<?= $kriteria['bobot'] ?>')" type="button" data-toggle="modal" data-target="#tambahkriteria" class="btn btn-info" data-tool="tooltip" title="Ubah Kriteria"><i class="fa fa-edit"></i></button>
                          <button onClick="hapus_kriteria('<?= base_url() ?>kriteria/proses_delete/<?= $kriteria['id_kriteria'] ?>')" data-toggle="modal" data-target="#deletekriteria" type="button" class="btn btn-default" data-tool="tooltip" title="Hapus Kriteria" ><i class="fa fa-trash"></i></button>
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
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form" method="post">

          <div class="form-group">
            <input type="hidden" name="id_kriteria" id="id_kriteria">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="kriteria" id="kriteria" class="form-control">
          </div>
          <div class="form-group">
            <label for="keterangan">Jenis</label>
            <select type="text" name="jenis" id="jenis" class="form-control" aria-placeholder="Pilih Jenis">
              <option value="" disabled selected>-- Pilih --</option>
              <option value="Benefit">Benefit</option>
              <option value="Cost">Cost</option>
            </select>
          </div>
          <div class="form-group">
            <label for="keterangan">Bobot</label>
            <input type="text" name="bobot" id="bobot" class="form-control">
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

<!-- Modal -->
<div class="modal fade" id="deletekriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletetitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="" class="btn btn-primary" id="btnhapus">Hapus Data</a>
      </div>
    </div>
  </div>
</div>