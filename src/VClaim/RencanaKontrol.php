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
        $response = $this->post('RencanaKontrol/insertSPRI', $data);
        return json_decode($response, true);
    }
    public function updateSPRI($data = [])
    {
        $response = $this->put('RencanaKontrol/UpdateSPRI', $data);
        return json_decode($response, true);
    }
    public function cariSEP($noSEP)
    {
        $response = $this->get('RencanaKontrol/nosep/'.$noSEP);
        return json_decode($response, true);
    }
    public function poliSpesialistik($jnsKontrol, $nomor, $tglKontrol)
    {
        $response = $this->get('RencanaKontrol/ListSpesialistik/JnsKontrol/'.$jnsKontrol.'/nomor/'.$nomor.'/TglRencanaKontrol/'.$tglKontrol);
        return json_decode($response, true);
    }
    public function dokterKontrol($jnsKontrol, $kdPoli, $tglRencanaKontrol)
    {
        $response = $this->get('RencanaKontrol/JadwalPraktekDokter/JnsKontrol/'.$jnsKontrol.'/'.'KdPoli'.'/'.$kdPoli.'/'.'TglRencanaKontrol'.'/'.$tglRencanaKontrol);
        return json_decode($response, true);
    }

    public function cariNoSuratKontrol($noSurat)
    {
        $response = $this->get('RencanaKontrol/noSuratKontrol/'.$noSurat);
        return json_decode($response, true);
    }

    public function dataNoSuratKontrol($tglAwal, $tglAkhir, $filter)
    {
        $response = $this->get('RencanaKontrol/ListRencanaKontrol/tglAwal/'.$tglAwal.'/tglAkhir/'.$tglAkhir.'/filter/'.$filter);
        return json_decode($response, true);
    }

}