<div class="footer py-5 border-top text-center">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <p class="mb-0">
                    <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | TK Amalia 

                </p>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?= base_url() ?>assets/homee/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/homee/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery.stellar.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>assets/homee/js/aos.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery.fancybox.min.js"></script>
<script src="<?= base_url() ?>assets/homee/js/jquery.sticky.js"></script>
<script src="<?= base_url() ?>assets/homee/js/main.js"></script>
<script src="<?= base_url() ?>assets/alert.js"></script>
<script src="<?= base_url() ?>assets/admin/pendaftaran.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script>
	pesan = document.getElementById('pesan');
	if (pesan != null) {
		swal({
			title: document.getElementById('title').innerHTML,
			text: pesan.innerHTML,
			icon: document.getElementById('type').innerHTML,
		});
	}
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/landerz/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 15:11:16 GMT -->

</html>