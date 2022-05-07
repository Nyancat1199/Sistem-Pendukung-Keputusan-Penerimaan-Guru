function tambah_kriteria(base_url) {
    document.getElementById("title").innerHTML = "Form Tambah Kriteria";
    document.getElementById("form").action = base_url;
    document.getElementById("id_kriteria").value = "";
    document.getElementById("kriteria").value = "";
    document.getElementById("jenis").value = "";
    document.getElementById("bobot").value = "";
}

function update_kriteria(base_url, id, kriteria, jenis, bobot) {
    document.getElementById("title").innerHTML = "Form Update Kriteria";
    document.getElementById("form").action = base_url;
    document.getElementById("id_kriteria").value = id;
    document.getElementById("kriteria").value = kriteria;
    document.getElementById("jenis").value = jenis;
    document.getElementById("bobot").value = bobot;
}

function hapus_kriteria(base_url) {
    document.getElementById("deletetitle").innerHTML =
        "Anda Yakin ingin menghapus Data?";
    document.getElementById("btnhapus").href = base_url;
}