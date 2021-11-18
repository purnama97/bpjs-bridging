<?php
namespace Purnama97\Bpjs\VClaim;
use Purnama97\Bpjs\BpjsService;

class RencanaKontrol extends BpjsService
{

    // Rencana Kontrol
    public function insertRencanaKontrol($data = [])
    {
        $response = $this->post('RencanaKontrol/insert', $data);
        return json_decode($response, true);
    }
    public function updateRencanaKontrol($data = [])
    {
        $response = $this->put('RencanaKontrol/Update', $data);
        return json_decode($response, true);
    }
    public function deleteRencanaKontrol($data = [])
    {
        $response = $this->delete('RencanaKontrol/Delete', $data);
        return json_decode($response, true);
    }
    public function listRencanaKontrol($tglAwal, $tglAkhir, $filter)
    {
        $response = $this->get('RencanaKontrol/ListRencanaKontrol/tglAwal/'.$tglAwal.'/'.'tglAkhir'.'/'.$tglAkhir.'/'.'filter'.'/'.$filter);
        return json_decode($response, true);
    }

    // SPRI
    public function insertSPRI($data = [])
    {
        $response = $this->post('PRB/insert', $data);
        return json_decode($response, true);
    }
    public function updateSPRI($data = [])
    {
        $response = $this->put('PRB/Update', $data);
        return json_decode($response, true);
    }
    public function deleteSPRI($data = [])
    {
        $response = $this->delete('PRB/Delete', $data);
        return json_decode($response, true);
    }
    public function dokterKontrol($jnsKontrol, $kdPoli, $tglRencanaKontrol)
    {
        $response = $this->get('RencanaKontrol/JadwalPraktekDokter/JnsKontrol/'.$jnsKontrol.'/'.'KdPoli'.'/'.$kdPoli.'/'.'TglRencanaKontrol'.'/'.$tglRencanaKontrol);
        return json_decode($response, true);
    }

    public function cariTanggalSRB($tglMulai, $tglAkhir)
    {
        $response = $this->get('PRB'.'/'.'tglMulai'.'/'.$tglMulai.'/'.'tglAkhir'.'/'.$tglAkhir);
        return json_decode($response, true);
    }
}