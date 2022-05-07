function detail_pendaftar(nama_lengkap, nik, alamat,tanggal_lahir, no_telp, email){

    document.getElementById('nama_lengkap').value = nama_lengkap;
    document.getElementById('nik').value = nik;
    document.getElementById('alamat').value = alamat;
    document.getElementById('tgl_lahir').value = tanggal_lahir;
    document.getElementById('no_telp').value = no_telp;
    document.getElementById('email').value = email;



}

function update_wawancara(base_url, id_wawancara, id_pendaftaran){

    document.getElementById('form').action = base_url;
    document.getElementById('id_wawancara').value = id_wawancara;
    document.getElementById('id_pendaftaran').value = id_pendaftaran;
}