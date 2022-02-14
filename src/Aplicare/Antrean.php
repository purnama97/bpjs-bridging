<?php
namespace Purnama97\Bpjs\Aplicare;

use Purnama97\Bpjs\BpjsService;

class Antrean extends BpjsService
{
    public function getPoli()
    {
        $response = $this->get('ref/poli');
        return json_decode($response, true);
    }
    public function getDokter()
    {
        $response = $this->get('ref/dokter');
        return json_decode($response, true);
    }
    public function getJadwalDokter($kodePoli, $tglPelayanan)
    {
        $response = $this->get('jadwaldokter/kodepoli/'.$kodePoli.'/tanggal/'.$tglPelayanan);
        return json_decode($response, true);
    }
    public function updateJadwalDokter($data = [])
    {
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data);
        return json_decode($response, true);
    }
    public function addAntrian($data = [])
    {
        $response = $this->post('antrean/add', $data);
        return json_decode($response, true);
    }
    public function updateWaktuAntrian($data = [])
    {
        $response = $this->post('antrean/updatewaktu', $data);
        return json_decode($response, true);
    }
    public function batalAntrian($data = [])
    {
        $response = $this->post('antrean/batal', $data);
        return json_decode($response, true);
    }
    public function waktuTasks($data = [])
    {
        $response = $this->post('antrean/getlisttask', $data);
        return json_decode($response, true);
    }
    public function getDashboardTgl($date, $time)
    {
        $response = $this->get('dashboard/waktutunggu/tanggal/'.$date.'/waktu/'.$time);
        return json_decode($response, true);
    }
    public function getDashboardBln($month, $year, $time)
    {
        $response = $this->get('dashboard/waktutunggu/bulan/'.$month.'/tahun/'.$year.'/waktu/'.$time);
        return json_decode($response, true);
    }
}