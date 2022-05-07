<?php
class ModelNormalisasi extends CI_Model
{

    public function getData()
    {

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria 
                AND tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND status_normalisasi = 0 ORDER BY n_total DESC";

        return $this->db->query($sql)->result_array();
    }

    public function insert($addData)
    {

        $this->db->insert_batch('tb_normalisasi', $addData);
    }

    public function deleteAllData()
    {
        $sql = "DELETE FROM tb_normalisasi";
        return $this->db->query($sql);
    }

    public function getDataById($id_users)
    {

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria 
                AND tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND id_users = $id_users ORDER BY n_total";

        return $this->db->query($sql)->row_array();
    }

    public function getDataLimit($limit)
    {

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria 
        AND tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND status_normalisasi = 0 ORDER BY n_total DESC LIMIT $limit";

        return $this->db->query($sql)->row_array();
    }

    public function getdataMax()
    {

        $sql = "SELECT MAX(n_total) from tb_normalisasi";

        return $this->db->query($sql)->result_array;
    }

    public function getDataBytgl()
    {

        $sql = "SELECT * FROM tb_normalisasi,tb_nilai_kriteria, tb_pendaftaran WHERE 
                tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
                tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran GROUP BY
                gelombang DESC ";

        return $this->db->query($sql)->result_array();
    }

    public function getDataByDateAndId($id_pendaftaran,$gelombang)
    {

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
        tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
        tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND tb_pendaftaran.id_pendaftaran != ? AND
        gelombang = '$gelombang' ORDER BY n_total DESC";

        return $this->db->query($sql, $id_pendaftaran)->result_array();
    }

    public function getDataLimitByDate($gelombang){

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria 
        AND tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND gelombang = ? ORDER BY n_total DESC LIMIT 1";

        return $this->db->query($sql, $gelombang)->row_array();

    }

    public function updateStatusNormalisasi(){

        $sql = "UPDATE tb_normalisasi SET status_normalisasi = 1 WHERE status_normalisasi = 0";

        return $this->db->query($sql);

    }

    public function getDataByDate($tanggal){

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
        tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
        tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND gelombang = $tanggal ORDER BY n_total DESC";

        return $this->db->query($sql)->result_array();

    }

    public function getGelombangByTgl($tanggal){

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
         tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
         tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND tgl_penerimaan = ?
         ORDER BY tgl_penerimaan";

        return $this->db->query($sql, $tanggal)->row_array();

    }

    public function getTgl($gelombang){
        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
         tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
         tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND gelombang = ?
         GROUP BY tgl_penerimaan";

        return $this->db->query($sql, $gelombang)->row_array();

    }

    public function getDataByGelombang($id_pendaftaran){

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
         tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
         tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND 
         tb_pendaftaran.id_pendaftaran != $id_pendaftaran";

        return $this->db->query($sql)->result_array();

    }

    public function getDataLaporan(){

        $sql = "SELECT * FROM tb_normalisasi,tb_nilai_kriteria,tb_pendaftaran WHERE
                tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
                tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran GROUP BY gelombang";
        
        return $this->db->query($sql)->result_array();

    }

    public function getDataAccept($tanggal){

        $sql = "SELECT * FROM tb_normalisasi, tb_nilai_kriteria, tb_pendaftaran WHERE
        tb_normalisasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
        tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND gelombang = $tanggal";

        return $this->db->query($sql)->row_array();

    }

    
}
