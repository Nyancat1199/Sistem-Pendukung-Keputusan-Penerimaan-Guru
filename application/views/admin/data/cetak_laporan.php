<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="<?= base_url() ?>assets/homee/images/lambang_transparan.png" rel="shortcut icon">
    <title>Laporan Penerimaan</title>
</head>

<body>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="<?= base_url() ?>assets/homee/images/lambang_transparan.png" width="130" height="130" style="margin-left: 80px;" alt="" srcset="">
                </div>
                <div class="col-10">
                <p style="font-size: 30px; margin-left: 200px;">YAYASAN AMAL SOLEH</p><br>
                <p style="margin-top: -30px; margin-left:120px; font-size:30px; " > <strong>TAMAN KANAK - KANAK AMALIA </strong> </p>
                <p style="margin-left:80px; font-size:15px; " >Jl. Setu Raya No.2 Rt.06 Rw.02 Kel. Bintara Jaya Kec. Bekasi Barat 17136 Tlp. (021) 8860583</p>
                </div>
            </div>
        </div>
    </div>
    <hr size="100px" width="90%" style="margin-top: -10px;">
    <div class="row mt-5">
        <div class="container" style="margin-right: 30px;">
            Tanggal Penerimaan : <strong><?= date('d F Y', strtotime($tgl_penerimaan)) ?></strong>
        </div>
    </div>
    <table class="table table-bordered col-8" align="center" style="margin-top:30px;">
        <thead>
            <tr>
                <th scope="col">
                    <center> No </center>
                </th>
                <th scope="col">
                    <center>Nama Lengkap</center>
                </th>
                <th scope="col">
                    <center>Tanggal Pendaftaran</center>
                </th>
                <th scope="col">
                    <center> Nilai </center>
                </th>
                <th scope="col">
                    <center> Hasil Penerimaan </center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data_penerimaan as $row) {  ?>
                <tr>
                    <th scope="row">
                        <center><?= $i++ ?></center>
                    </th>
                    <td>
                        <center> <?= $row['nama_lengkap'] ?></center>
                    </td>
                    <td>
                        <center> <?= $row['tgl_pendaftaran'] ?> </center>
                    </td>
                    <td>
                        <center> <?= $row['n_total'] ?></center>
                    </td>
                    <?php if ($data_limit['id_pendaftaran'] == $row['id_pendaftaran']) { ?>
                        <td>
                            <center> Diterima </center>
                        </td>
                    <?php } else { ?>
                        <td>
                            <center>Tidak Diterima </center>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <script>
        window.print();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>