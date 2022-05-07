function verif_pendaftaran(
	base_url,
	nik,
	nuptk,
	nama_lengkap,
	tgl_lahir,
	ktp,
	ijazah,
	pendidikan,
	bukticv,
	pengalaman,
	buktinuptk,
	buktisurat
) {
	document.getElementById("form").action = base_url;
	document.getElementById("nik").value = nik;
	document.getElementById("nama_lengkap").value = nama_lengkap;
	document.getElementById("tgl_lahir").value = tgl_lahir;
	document.getElementById("buktiktp").href = ktp;
	document.getElementById("buktiijazah").href = ijazah;
	document.getElementById("pendidikan").value = pendidikan;
	document.getElementById("bukticv").href = bukticv;
	document.getElementById("pengalaman").value = pengalaman;
	document.getElementById("nuptk_surat").value = nuptk;
	document.getElementById("bukti_nuptk_surat").href = buktinuptk;
	document.getElementById("bukti_nuptk").href = buktisurat;
	

	
	let nonuptk = document.getElementById('no_nuptk')
	let suratket = document.getElementById('surat_ket')
	let label_nuptk = document.getElementById('l_nuptk')
	let butkti = document.getElementById('bukti_nuptk_surat')
	let butkti_nuptk = document.getElementById('buktino_nuptk')
	if(nuptk === ""){
		nonuptk.hidden = true
		label_nuptk.hidden = true
		suratket.hidden = false
		butkti_nuptk.hidden = true
	}else{
		label_nuptk.hidden = false
		nonuptk.hidden = false
		suratket.hidden = true
		butkti.hidden = false
		butkti_nuptk.hidden = false
	}

	console.log(document.getElementById("bukti_nuptk").href = buktisurat)
	
	
}

function dtPendaftar(nama_lengkap, nik, alamat, tanggal_lahir, no_telp, email) {
	document.getElementById("nama_lengkap").value = nama_lengkap;
	document.getElementById("nik").value = nik;
	document.getElementById("alamat").value = alamat;
	document.getElementById("tgl_lahir").value = tanggal_lahir;
	document.getElementById("no_telp").value = no_telp;
	document.getElementById("email").value = email;
}

function getusia() {
	var date = document.getElementById("tgl_lahir").value;

	var today = new Date();
	var birthday = new Date(date);
	var year = 0;
	if (today.getMonth() < birthday.getMonth()) {
		year = 1;
	} else if (
		today.getMonth() == birthday.getMonth() &&
		today.getDate() < birthday.getDate()
	) {
		year = 1;
	}
	var age = today.getFullYear() - birthday.getFullYear() - year;

	if (age < 0) {
		age = 0;
	}

	document.getElementById("result_tgl").value = age;
}

function infoData(
	nik,
	nama,
	tgl,
	ktp,
	pendidikan,
	ijazah,
	nuptk,
	bukti_nuptk,
	pengalaman,
	cv,
	c_nik,
	c_nama,
	c_tgl,
	c_pendidikan,
	c_pengalaman,
	c_nuptk,
	c_surat

) {
	document.getElementById("nik_check").value = nik;
	document.getElementById("nama_check").value = nama;
	document.getElementById("tgl_lahir_check").value = tgl;
	document.getElementById("c_buktiktp").href = ktp;
	document.getElementById("pendidikan_check").value = pendidikan;
	document.getElementById("c_ijazah").href = ijazah;
	document.getElementById("nuptk_check").value = nuptk;
	document.getElementById("c_bukti_nuptk").href = bukti_nuptk;
	document.getElementById("check_surat_ket").href = bukti_nuptk;
	document.getElementById("pengalaman_check").value = pengalaman;
	document.getElementById("c_cv").href = cv;
	document.getElementById("c_nik").checked = checkData(c_nik);
	document.getElementById("c_nama").checked = checkData(c_nama);
	document.getElementById("c_tgl").checked = checkData(c_tgl);
	document.getElementById("c_pendidikan").checked = checkData(c_pendidikan);
	document.getElementById("c_pengalaman").checked = checkData(c_pengalaman);
	document.getElementById("c_nuptk").checked = checkData(c_nuptk);
	document.getElementById("c_surat").checked = checkData(c_surat);

	
	let suratKet = document.getElementById("c_surat_ket")
	let noNuptk = document.getElementById("c_no_nuptk")
	let buktiNuptk = document.getElementById("bukti_no_nuptk")
	if(nuptk === ""){
		noNuptk.hidden = true
		buktiNuptk.hidden = true
		suratKet.hidden = false
	}else{
		suratKet.hidden = true
		noNuptk.hidden = false
		buktiNuptk.hidden = false
	}
	console.log(nuptk)
}

function checkData(status) {
	let check = "";

	if (status == 1) {
		check = true;
	} else {
		check = false;
	}

	return check;
}

// function getGelombang(gelombang) {
// 	let tanggal = document.getElementById("tgl_penerimaan");
// 	let isGelombang = "";

// 	if (tanggal) {
// 		isGelombang = document.getElementById("gelombang").innerHTML = gelombang;
// 	}

//     return isGelombang;
// }

function filterByTahun() {
	let dateOfBirth = document.getElementById("tgl_lahir").value;
	let today = new Date().getFullYear();
	let birth = new Date(dateOfBirth);

	let age = today - birth.getFullYear();

	if (age < 50) {
		document.getElementById("tgl_filter").innerHTML =
			"Umur sudah Diatas 50 tahun";
		document.getElementById("tgl_filter").hidden = false;
		document.getElementById("btn_daftar").disabled = true;
	} else if (age > 22) {
		document.getElementById("tgl_filter").innerHTML = "Umur dibawah 22 tahun";
		document.getElementById("tgl_filter").hidden = false;
		document.getElementById("btn_daftar").disabled = true;
	}
}

function filterByTglLahir() {
	const dateOfBirth = document.getElementById("tgl_lahir").value;
	let today = new Date();
	let birthday = new Date(dateOfBirth);
	let age = 0;

	let month = "";
	if (birthday.getMonth() < today.getMonth()) {
		month = 0;
	} else if (birthday.getMonth() > today.getMonth()) {
		month = 1;
	} else if (
		birthday.getMonth() == today.getMonth() &&
		birthday.getDate() > today.getDate()
	) {
		month = 1;
	} else {
		month = 0;
	}

	age = today.getFullYear() - birthday.getFullYear() - month;

	if (age > 50) {
		document.getElementById("tgl_filter").innerHTML =
			"Umur sudah Diatas 50 tahun, Tidak Bisa Mendaftar";
		document.getElementById("tgl_filter").hidden = false;
		document.getElementById("btn_daftar").disabled = true;
	} else if (age < 22) {
		document.getElementById("tgl_filter").innerHTML =
			"Umur dibawah 22 tahun, Tidak Bisa Mendaftar";
		document.getElementById("tgl_filter").hidden = false;
		document.getElementById("btn_daftar").disabled = true;
	} else {
		document.getElementById("tgl_filter").hidden = true;
		document.getElementById("btn_daftar").disabled = false;
	}

	document.getElementById("h_usia").value = age;
}

function filter_nuptk() {
	nuptk = document.getElementById("nuptk");
	nuptkno = document.getElementById("t_nuptk").checked;
	

	if (nuptkno == true) {
		nuptk.hidden = true;
		document.getElementById('label_nuptk').innerHTML = "Surat Keterangan Pernah Mengajar"
		document.getElementById('bukti_nuptk').hidden = false
	}else{
		nuptk.hidden = false;
		document.getElementById('label_nuptk').innerHTML = "Bukti NUPTK"
		document.getElementById('bukti_nuptk').hidden = false
	}

	console.log(nuptkno)
	
}
