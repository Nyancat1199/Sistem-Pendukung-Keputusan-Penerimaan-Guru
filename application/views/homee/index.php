        <div class="site-blocks-cover">
            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner" style="height: 620px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url() ?>assets/homee/images/bannertk.png" style="margin-top: 100px;" height="580" alt="First slide">
                        
                    </div>
                    <div class="carousel-item">
                        <a href="<?= base_url() ?>home/alur_pendaftaran"><img class="d-block w-100" src="<?= base_url() ?>assets/homee/images/kegiatan1.jpg" style="margin-top: 100px; background-size:cover;" alt=" Second slide"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->
            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/homee/images/bannertk.png" height="550px" width="1400" style="margin-top: 100px;" alt="" srcset=""></a>
            <div class="container">
                <?php if ($this->session->flashdata('pesan')) {  ?>
                    <p style="display: none;" id="pesan"><?= $this->session->flashdata('pesan') ?></p>
                    <p style="display: none;" id="title"><?= $this->session->flashdata('title') ?></p>
                    <p style="display: none;" id="type"><?= $this->session->flashdata('type') ?></p>
                <?php } ?>

                <!-- <div class="row align-items-center justify-content-center">
                    <div class="col-md-12" style="position: relative;" data-aos="fade-up ">
                        <img src="<?= base_url() ?>assets/homee/images/kegiatan1.jpg" style="height: 600px; background-size:cover;" alt="Image" class="img-fluid img-absolute">
                        <div class="row mb-4 mt-5">
                            <div class="col-lg-5 mr-auto">
                                <img src="<?= base_url() ?>assets/homee/images/lambangtk.png" class="mb-3" alt="" srcset="" style="margin-left: 150px;">
                                <h2 class="section-title mb-5" style="margin-left: 50px; text-align:center;"><strong>Selamat Datang di Website TK Amalia</strong></h2>
                                <!-- <div>
                                    <a href="<?= base_url() ?>home/pendaftaran_guru" class="btn btn-primary mr-2 mb-2">Ingin Jadi Pengajar ?</a>
                                </div> -->
            </div>
        </div>
        </div>
        </div> -->
        </div>
        </div>
        <div class="site-section bg-light" id="features-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Program Kesiswaan</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <!-- <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
                            </div> -->
                            <div class="">
                                <h3>Outbond</h3>
                                <p style="text-align:left">Kegiatan siswa yang bertujuan melatih kemandirian, keberanian, kerjasama dengan tim, mengenal lingku
                                    ngan masyarakat, belajar bagaimana memahami pendapat dan perbedaan dari orang lain dalam memecahkan masalah secara kelompok.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block" style="height: 290px;">
                            <!-- <div class="unit-4-icon mb-3">
                                <center>
                                    <span class="icon-wrap"><span class="text-primary icon-local_shipping"></span></span>
                                </center>
                            </div> -->
                            <div>
                                <h3>Manasik Haji</h3>
                                <p style="text-align: left;">Aktivitas praktek ibadah yang bertujuan menanamkan sikap religius terhadap anak usia dini, mengenalk
                                    an rukun Islam yang kelima dan mempraktekkan tatacara melakukannya dalam miniatur pelaksanaan ibadah haji.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block" style="height: 290px;">
                            <!-- <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>
                            </div> -->
                            <div>
                                <h3>Kunjungan Edukatif</h3>
                                <p>Kegiatan pembelajaran di luar lingkungan sekolah yang bertujuan untuk memberikan pengalaman belajar
                                    yang lebih ‘nyata’ kepada anak-anak/ contekstual learning.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" style="margin-left: 200px;" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <!-- <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="text-primary icon-settings_backup_restore"></span></span>
                            </div> -->
                            <div>
                                <h3>Lomba</h3>
                                <p>Kegiatan yang diikuti di dalam sekolah maupun di luar lingkungan sekolah yang bertujuan mengembangka
                                    n karakter gigih, pantang menyerah, berani, semangat berkompetisi dan kolaborasi secara sehat, kreatif dan inovatif,serta menumbuhkan rasa percaya diri pada anak.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block" style="height: 290px;">
                            <!-- <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                            </div> -->
                            <div>
                                <h3>Budaya Membaca</h3>
                                <p>Kegiatan yang bertujuan untuk membentuk budaya membaca bagi siswa. Kegiatan membacakan buku cerita d
                                    ilakukan minimal 1 kali sepekan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="feature-big">
            <div class="container">
                <div class="row mb-5 site-section border-bottom">
                    <div class="col-lg-7">
                        <img src="<?= base_url() ?>assets/homee/images/tkb2.jpeg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                        <h2 class="text-black">Kelompok Belajar A</h2>
                        <p class="mb-4">Kelompok atau rombongan belajar pada anak usia dini atau TK yang bisa masuk ke kelompok atau rombongan belajar A adalah mereka mereka yang sudah memasuki usia 4 sampai dengan 5 tahun</p>
                        <ul class="ul-check mb-5 list-unstyled success">
                            <li>Usia 4-5 Tahun</li>

                        </ul>
                    </div>
                </div>
                <div class="mt-5 row mb-5 site-section ">
                    <div class="col-lg-7 order-1 order-lg-2">
                        <img src="<?= base_url() ?>assets/homee/images/tk3.jpeg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
                        <h2 class="text-black">Kelompok Belajar B</h2>
                        <p class="mb-4">Kelompok B adalah kelompok atau rombongan belajar dalam sebuah lembaga pendidikan anak usia dini atau TK,dan anak yang bisa masuk kel kelompok ini adalah mereka mereka yang sudah mencapai usia 5 sampai dengan 6 tahun</p>
                        <ul class="ul-check mb-5 list-unstyled success">
                            <li>Usia 5-6 Tahun</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="about-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Visi & Misi</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 ml-auto">
                        <img src="<?= base_url() ?>assets/homee/images/VISI.png" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded">
                    </div>
                    <div class="col-lg-6 pl-lg-5">
                        <h2 class="text-black mb-4">Visi</h2>
                        <p class="mb-4">Memberikan kesempatan dan pemerataan serta pelayanan pendidikan bagi semua warga negara indonesia pada jenjang Taman Kanak - kanak</p>
                        <p>Mendukung pelaksanaan program wajib belajar Pendidikan dasar yang bermutu, efektif, efisien dan mandiri</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 ml-auto pl-lg-5">
                        <h2 class="text-black mb-4">Misi</h2>
                        <p class="mb-4">Berperan aktif serta bekerja sama dengan masyarakat dalam memasyaratkan Pendidikan di Taman Kanak - kanak menuju Pendidikan yang efektif dan efisien berdasarkan pada Prinsip Kemandirian</p>
                        <p class="mb-4">Menyiapkan fasilitas Pendidikan untuk mengembangkan seluruh potensi anak Taman Kanak – kanak secara utuh dalam rangka mewujudkan anak yang berkepribadian bermoral agama, menguasai ilmu pengetahuan dan memiliki keterampilan potensial</p>
                    </div>
                    <div class="col-lg-5">
                        <img src="<?= base_url() ?>assets/homee/images/MISI.png" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded">
                    </div>

                </div>
            </div>
        </div>
        <div class="site-section testimonial-wrap" id="testimonials-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Kegiatan Minat & Bakat</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 ml-auto">
                        <img src="<?= base_url() ?>assets/homee/images/drawing.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
                    </div>
                    <div class="col-lg-6 pl-lg-5">
                        <h2 class="text-black mb-4">Melukis</h2>
                        <p class="mb-4">Mengembangkan seni dan kreativitas siswa, melatih motorik halus siswa dalam menggambar dan mewarnai suatu objek dengan rapi dan estetis.</p>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 ml-auto pl-lg-5">
                        <h2 class="text-black mb-4">Bernyanyi</h2>
                        <p class="mb-4">Melatih kepekaan anak terhadap nada, ketukan birama dan irama yang ada pada sebuah lagu. Sehingga dengan ekstra kurikuler ini diharapkan anak dapat bernyanyi dengan baik, dapat mengikuti irama, mengerti ketukan birama dan dapat menunjukkan ekspresi melalui suara dan gerak dengan penuh percaya diri.</p>

                    </div>
                    <div class="col-lg-5">
                        <img src="<?= base_url() ?>assets/homee/images/bernyanyi.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 ml-auto">
                        <img src="<?= base_url() ?>assets/homee/images/dance.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
                    </div>
                    <div class="col-lg-6 pl-lg-5">
                        <h2 class="text-black mb-4">Menari</h2>
                        <p class="mb-4">Melatih motorik kasar anak, mengolah kepekaan rasa, melenturkan gerak dan melatih koordinasi seluruh anggota tubuh dan konsentrasi. Sehingga anak dapat melakukan gerak dengan terarah, teratur, lentur dan terkoordinasi dengan baik. Hal ini sangat penting bagi perkembangan kekuatan motorik kasar anak.</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="site-section bg-light" id="tentang-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Tentang Kami</h2>
                    </div>
                </div>
            </div>
            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">
                        <figure class="mb-4 d-block align-items-center justify-content-center">
                            <div><img src="<?= base_url() ?>assets/homee/images/lambang.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
                        </figure>
                        <blockquote class="mb-3">
                            <p>TK Amalia mulai berdiri tahun 1998 dengan nama awal BKB( bina keluarga balita) yang menyelenggarakan pendidikan untuk anak balita. pada tahun 2000 karena siswanya sdh usia TK maka didirikannya tk amalia oleh ibu Ardianti Artiningsih yang tujuannya membuat TK untuk keluarga ekonomi lemah. tahun 2002 TK Amalia mendapat izin operasional resmi dari dinas pendidikan kota Bekasi dengan nomor perizinan NO. 421/939/SK-DIKBUD/X/2002 dan memiliki NPSN dengan nomor 20266319</p>
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>