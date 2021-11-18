<?php
namespace Purnama97\Bpjs\VClaim;
use Purnama97\Bpjs\BpjsService;

class PRB extends BpjsService
{
    public function insertPRB($data = [])
    {
        $response = $this->post('PRB/insert', $data);
        return json_decode($response, true);
    }
    public function updatePRB($data = [])
    {
        $response = $this->put('PRB/Update', $data);
        return json_decode($response, true);
    }
    public function deletePRB($data = [])
    {
        $response = $this->delete('PRB/Delete', $data);
        return json_decode($response, true);
    }

    public function cariNomorSRB($noSRB, $noSEP)
    {
        $response = $this->get('PRB'.'/'.$noSRB.'/'.'nosep'.'/'.$noSEP);
        return json_decode($response, true);
    }

    public function cariTanggalSRB($tglMulai, $tglAkhir)
    {
        $response = $this->get('PRB'.'/'.'tglMulai'.'/'.$tglMulai.'/'.'tglAkhir'.'/'.$tglAkhir);
        return json_decode($response, true);
    }
}