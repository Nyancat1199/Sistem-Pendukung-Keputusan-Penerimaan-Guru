<?php

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKriteria');
        $this->load->model('ModelNilaiKriteria');
        $this->load->model('ModelNormalisasi');
        $this->load->model('ModelWawancara');
    }

    public function hitungNormalisasi()
    {
        $data_nilai = $this->ModelNilaiKriteria->getDataKriteria();
        if ($data_nilai) {
            // Get data kriteria
            $getKriteria = $this->ModelKriteria->getData();
            $getKriteriaCost = $this->ModelKriteria->getDataPerTipe('Cost');
            $getKriteriaBenefit = $this->ModelKriteria->getDataPerTipe('Benefit');

            // get nilai dari setiap kriteria
            $nilaiKriteria = $this->ModelNilaiKriteria->getDataKriteria();
            $jumlahPendaftar = count($nilaiKriteria);

            //hasil max setiap kriteria dalam bentuk array
            $hasilMaxDariSetiapKriteria = array();
            $hasilMinDariSetiapKriteria = array();

            //hasil pembagian antara nilai kriteria dan nilai max kriteria
            $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria = array();
            $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMinKriteria = array();
            //mencari nilai max dari kriteria benefit

            foreach ($getKriteriaBenefit as $kBenefit) {
                $hasilMaxKriteria = $this->ModelNilaiKriteria->ambilNilaiMaxBerdasarkanKriteria($kBenefit['kriteria']);
                $idSubKriteria = $hasilMaxKriteria[0][$kBenefit['kriteria']];
                $readDatasubKriteria = $this->ModelNilaiKriteria->getDetailSubKriteria($idSubKriteria);
                array_push($hasilMaxDariSetiapKriteria, array(
                    'kriteria' => $kBenefit['kriteria'],
                    'id_subkriteria' => $hasilMaxKriteria[0][$kBenefit['kriteria']],
                    'hasil' => $readDatasubKriteria['nilai_sub']

                ));
            }
            foreach ($getKriteriaCost as $kCost) {
                $hasiMinKriteria = $this->ModelNilaiKriteria->ambilNilaiMinBerdasarkanKriteria($kCost['kriteria']);
                $idSubKriteria = $hasiMinKriteria[0][$kCost['kriteria']];
                $readDatasubKriteriaCost = $this->ModelNilaiKriteria->getDetailSubKriteria($idSubKriteria);
                array_push($hasilMinDariSetiapKriteria, array(
                    'kriteria' => $kCost['kriteria'],
                    'id_subkriteria' => $hasiMinKriteria[0][$kCost['kriteria']],
                    'hasil' => $readDatasubKriteriaCost['nilai_sub']
                ));
            }

            foreach ($nilaiKriteria as $n) {
                $c = [];
                // mencari nilai normalisasi (benefit)
                foreach ($hasilMaxDariSetiapKriteria as $hmxdsk) {
                    array_push($c, array(
                        'kriteria' => $hmxdsk['kriteria'],
                        'normalisasi' => $n[$hmxdsk['kriteria']] / $hmxdsk['hasil'],
                    ));
                }

                // mencari nilai normalisasi (cost)
                foreach ($hasilMinDariSetiapKriteria as $hmndsk) {
                    array_push($c, [
                        'kriteria' => $hmndsk['kriteria'],
                        'normalisasi'    => $hmndsk['hasil'] / $n[$hmndsk['kriteria']]
                    ]);
                }
                array_push($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria, array(
                    'id_nilai_kriteria' => $n['id_nilai_kriteria'],
                    'hasil_normalisasi' => $c,
                ));
            }

            // delete data normalisasi
            // $this->ModelNormalisasi->deleteAllData();
            $this->ModelNormalisasi->updateStatusNormalisasi();
            foreach ($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria as $n) {
                // pengalaman
                $nPengalaman = $n['hasil_normalisasi'][0]['normalisasi'] * $getKriteria[0]['bobot'];
                $pangkatPengalaman = pow($n['hasil_normalisasi'][0]['normalisasi'], $getKriteria[0]['bobot']);
                // pendidikan
                $nPendidikan = $n['hasil_normalisasi'][1]['normalisasi'] * $getKriteria[1]['bobot'];
                $pangkatPendidikan = pow($n['hasil_normalisasi'][1]['normalisasi'], $getKriteria[1]['bobot']);
                // wawancara
                $nWawancara = $n['hasil_normalisasi'][2]['normalisasi'] * $getKriteria[3]['bobot'];
                $pangkatWawancara = pow($n['hasil_normalisasi'][2]['normalisasi'], $getKriteria[3]['bobot']);
                // kepribadian
                $nKepribadian = $n['hasil_normalisasi'][3]['normalisasi'] * $getKriteria[4]['bobot'];
                $pangkatKepribadian = pow($n['hasil_normalisasi'][3]['normalisasi'], $getKriteria[4]['bobot']);
                // usia
                $nUsia = $n['hasil_normalisasi'][4]['normalisasi'] * $getKriteria[2]['bobot'];
                $pangkatUsia = pow($n['hasil_normalisasi'][4]['normalisasi'], $getKriteria[2]['bobot']);

                $totalNilaiAlternatif = 0.5 * ($nPengalaman + $nPendidikan + $nWawancara + $nKepribadian + $nUsia);
                $totalNilaiPangkat = 0.5 * ($pangkatPengalaman * $pangkatPendidikan * $pangkatWawancara * $pangkatKepribadian * $pangkatUsia);
                $tgl_penerimaan = date('Y-m-d');

                $addData = array(
                    array(
                        'id_nilai_kriteria' => $n['id_nilai_kriteria'],
                        'n_pengalaman'      => $n['hasil_normalisasi'][0]['normalisasi'],
                        'n_pendidikan'      => $n['hasil_normalisasi'][1]['normalisasi'],
                        'n_wawancara'      => $n['hasil_normalisasi'][2]['normalisasi'],
                        'n_kepribadian'      => $n['hasil_normalisasi'][3]['normalisasi'],
                        'n_usia'      => $n['hasil_normalisasi'][4]['normalisasi'],
                        'n_total'       => $totalNilaiPangkat + $totalNilaiAlternatif,
                        'tgl_penerimaan' => $tgl_penerimaan
                    )
                );
                // tambah

                $this->ModelNormalisasi->insert($addData);
                $getDataNormalisasi = $this->ModelNormalisasi->getDataLimit(1);
                $this->session->set_flashdata('nama_lengkap', $getDataNormalisasi['nama_lengkap']);
                $this->session->set_flashdata('type', 'info');
                $this->session->set_flashdata('total', $getDataNormalisasi['n_total']);
                $this->ModelNilaiKriteria->UpdateStatus();
            }
            redirect(base_url('dashboard/data_nilai'));
        } else {
            $this->session->set_flashdata('pesan', 'Tidak Ada data yang dihitung');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/data_nilai'));
        }
    }
}
