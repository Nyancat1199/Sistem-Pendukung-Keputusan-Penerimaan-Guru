function tambah_subkriteria(base_url) {
    document.getElementById("form").action = base_url;
    document.getElementById("title").innerHTML = "Form Tambah Subkriteria";
    document.getElementById("sub_kriteria").value = "";
    document.getElementById("nilai").value = "";
}

function update_subkriteria(base_url, id_sub, kriteria, nilai) {
    document.getElementById("title").innerHTML = "Form Update Subkriteria";
    document.getElementById("form").action = base_url;
    document.getElementById("id_subkriteria").value = id_sub;
    document.getElementById("sub_kriteria").value = kriteria;
    document.getElementById("nilai").value = nilai;
}

function delete_subkriteria(base_url) {
    document.getElementById("btnhapus").href = base_url;
}