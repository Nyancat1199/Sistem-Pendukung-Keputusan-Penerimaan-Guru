<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Penilaian Wawancara & Kepribadian</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Wawancara & Kepribadian  </li>
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
                  
                  <th>
                   <center>Action</center>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($data_wawancara as $row) {  ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    
                    <td>
                      <center>
                        <button onClick="update_wawancara('<?= base_url() ?>wawancara/updatewawancara','<?= $row['id_wawancara'] ?>','<?= $row['id_pendaftaran'] ?>')" type="button" data-toggle="modal" data-target="#nilaikriteria" class="btn btn-warning" data-tool="tooltip" title="Penilaian" data-placement="top"><i class="fa fa-edit"></i></button>
                        <button onClick="detail_pendaftar('<?= $row['nama_lengkap'] ?>','<?= $row['nik'] ?>','<?= $row['alamat'] ?>','<?= $row['tanggal_lahir'] ?>','<?= $row['no_telp'] ?>','<?= $row['email'] ?>')" type="button" data-toggle="modal" data-target="#detailpendaftar" data-tool="tooltip" title="Detail Pendaftar" class="btn btn-info"><i class="fa fa-user"></i></button>
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
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailpendaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Detail Pendaftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label for="" class="col-sm-3">Nama Lengkap</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-3">Nik</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="nik" id="nik" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-3">Alamat</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="alamat" id="alamat" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-3">Tanggal Lahir</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-3">No Telp</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="no_telp" id="no_telp" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-3">E-Mail</label>
          <label for="" class="col-sm-1">:</label>
          <div class="col-sm-8">
            <div class="input-group mb-3">
              <input type="text" name="email" id="email" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>