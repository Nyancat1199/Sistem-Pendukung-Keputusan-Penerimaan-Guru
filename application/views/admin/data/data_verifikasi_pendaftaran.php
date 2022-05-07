<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Verifikasi Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Verifikasi Data</li>
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

                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <?php if ($this->session->flashdata('pesan')) { ?>
                            <div class="alert alert-<?= $this->session->flashdata('type'); ?>" role="alert">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php } ?>
                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Verifikasi Data</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lolos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tidak Lolos</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        foreach ($data_isverif as $row) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $row['nama_lengkap'] ?></td>

                                                <td>
                                                    <center>
                                                        <button id="btn_verif" onClick="verif_pendaftaran('<?= base_url() ?>pendaftaran/verifikasi/<?= $row['id_pendaftaran'] ?>','<?= $row['nik'] ?>','<?= $row['nuptk'] ?>','<?= $row['nama_lengkap'] ?>','<?= $row['tanggal_lahir'] ?>','<?= base_url() ?>assets/admin/image/<?= $row['ktp'] ?>','<?= base_url() ?>assets/admin/image/<?= $row['ijazah'] ?>','<?= $row['bukti_pendidikan'] ?>',
                                                '<?= base_url() ?>assets/admin/image/<?= $row['cv'] ?>','<?= $row['bukti_pengalaman'] ?>','<?= base_url() ?>assets/admin/image/<?= $row['nuptk_surat'] ?>','<?= base_url() ?>assets/admin/image/<?= $row['nuptk_surat'] ?>')" data-tool="tooltip" title="Verifikasi Data" data-toggle="modal" data-target="#modalverif" class="btn btn-success"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pendaftar</th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($data_verif as $verif) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $verif['nama_lengkap'] ?></td>
                                                <td>
                                                    <center>
                                                        <button class="btn btn-outline-success" type="button">Lolos Verifikasi Data</button>

                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <button onClick="infoData('<?= $verif['nik'] ?>','<?= $verif['nama_lengkap'] ?>','<?= $verif['tanggal_lahir'] ?>'
                                                        ,'<?= base_url() ?>assets/admin/image/<?= $verif['ktp'] ?>','<?= $verif['bukti_pendidikan'] ?>','<?= base_url() ?>assets/admin/image/<?= $verif['ijazah'] ?>','<?= $verif['nuptk'] ?>', '<?= base_url() ?>assets/admin/image/<?= $verif['nuptk_surat'] ?>'
                                                        ,'<?= $verif['bukti_pengalaman'] ?>','<?= base_url() ?>assets/admin/image/<?= $verif['cv'] ?>','<?= $verif['c_nik'] ?>','<?= $verif['c_nama'] ?>','<?= $verif['c_tgl_lahir'] ?>'
                                                        ,'<?= $verif['c_pendidikan'] ?>','<?= $verif['c_pengalaman'] ?>','<?= $verif['c_nuptk'] ?>','<?= $verif['c_surat'] ?>')" class="btn btn-info" data-tool="tooltip" data-toggle="modal" data-target="#infodata" title="Info Data"><i class="fas fa-file"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table id="" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pendaftar</th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center> Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($data_notverif as $nverif) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $nverif['nama_lengkap'] ?></td>
                                                <td>
                                                    <center>
                                                        <button class="btn btn-outline-danger" type="button">Tidak Lolos Verifikasi Data</button>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <button onClick="infoData('<?= $nverif['nik'] ?>','<?= $nverif['nama_lengkap'] ?>','<?= $nverif['tanggal_lahir'] ?>'
                                                        ,'<?= base_url() ?>assets/admin/image/<?= $nverif['ktp'] ?>','<?= $nverif['bukti_pendidikan'] ?>','<?= base_url() ?>assets/admin/image/<?= $nverif['ijazah'] ?>','<?= $nverif['nuptk'] ?>', '<?= base_url() ?>assets/admin/image/<?= $nverif['nuptk_surat'] ?>'
                                                        ,'<?= $nverif['bukti_pengalaman'] ?>','<?= base_url() ?>assets/admin/image/<?= $nverif['cv'] ?>','<?= $nverif['c_nik'] ?>','<?= $nverif['c_nama'] ?>','<?= $nverif['c_tgl_lahir'] ?>'
                                                        ,'<?= $nverif['c_pendidikan'] ?>','<?= $nverif['c_pengalaman'] ?>','<?= $nverif['c_nuptk'] ?>','<?= $nverif['c_surat'] ?>')" class="btn btn-info" data-tool="tooltip" data-toggle="modal" data-target="#infodata" title="Info Data"><i class="fas fa-file"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


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
<div class="modal fade" id="modalverif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url() ?>pendaftaran/verifikasi" id="form" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Verifikasi Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="" class="col-sm-2">Nik</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" name="nik" id="nik" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_nik" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_nama" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_tgl" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    

                    <div class="form-group row">
                        <label for="" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <a href="" id="buktiktp" target="_blank"><img src="" id="" alt="">Lihat Bukti KTP</a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Pendidikan</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="pendidikan" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_pendidikan" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <a href="" id="buktiijazah" target="_blank" class="mr-auto">Lihat Bukti Ijazah</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row" id="no_nuptk">
                        <label for="" class="col-sm-2" id="l_nuptk">NUPTK</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="nuptk_surat" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_nuptk" id="check_nuptk" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="buktino_nuptk">
                        <label for="" class="col-md-2"></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <a href="" id="bukti_nuptk" target="_blank" class="mr-auto">Lihat NUPTK</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="surat_ket">
                        <label for="" class="col-sm-2">Surat Keterangan</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <a href="" id="bukti_nuptk_surat" target="_blank" class="mr-auto">Lihat Surat Keterangan Pernah Mengajar</a>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_surat" id="check_surat" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Pengalaman</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="pengalaman" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="check_pengalaman" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-2"></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <a href="" id="bukticv" target="_blank" class="mr-auto">Lihat CV</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="infodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" id="form" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Verifikasi Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="" class="col-sm-2">Nik</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" name="nik_check" id="nik_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_nik" id="c_nik" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" name="nama_check" id="nama_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_nama" id="c_nama" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="date" name="tgl_lahir_check" id="tgl_lahir_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_tgl" id="c_tgl" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        

                    <div class="form-group row">
                        <label for="" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <a href="" id="c_buktiktp" target="_blank"><img src="" id="" alt="">Lihat Bukti KTP</a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Pendidikan</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="pendidikan_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_pendidikan" id="c_pendidikan" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <a href="" id="c_ijazah" target="_blank" class="mr-auto">Lihat Bukti Ijazah</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row" id="c_no_nuptk">
                        <label for="" class="col-sm-2">NUPTK</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="nuptk_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_nuptk" id="c_nuptk" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="bukti_no_nuptk">
                        <label for="" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <a href="" id="c_bukti_nuptk" target="_blank" class="mr-auto">Lihat Bukti NUPTK</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="c_surat_ket">
                        <label for="" class="col-sm-2">Surat Keterangan</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <a href="" id="check_surat_ket" target="_blank" class="mr-auto">Lihat Surat Keterangan Pernah Mengajar</a>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_surat" id="c_surat" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Pengalaman</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" id="pengalaman_check" class="form-control" readonly aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="c_pengalaman" id="c_pengalaman" aria-label="Checkbox for following text input" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-2"></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <a href="" id="c_cv" target="_blank" class="mr-auto">Lihat CV</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>