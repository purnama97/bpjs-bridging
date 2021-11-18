<?php
namespace Purnama97\Bpjs\VClaim;
use Purnama97\Bpjs\BpjsService;

class Sep extends BpjsService
{

    public function insertSEP($data = [])
    {
        $response = $this->post('SEP/2.0/insert', $data);
        return json_decode($response, true);
    }
    public function updateSEP($data = [])
    {
        $response = $this->put('SEP/2.0/Update', $data);
        return json_decode($response, true);
    }
    public function deleteSEP($data = [])
    {
        $response = $this->delete('SEP/2.0/Delete', $data);
        return json_decode($response, true);
    }

    public function cariSEP($keyword)
    {
        $response = $this->get('SEP/'.$keyword);
        return json_decode($response, true);
    }

    public function suplesiJasaRaharja($noKartu, $tglPelayanan)
    {
        $response = $this->get('sep/JasaRaharja/Suplesi/'.$noKartu.'/tglPelayanan/'.$tglPelayanan);
        return json_decode($response, true);
    }
    public function pengajuanPenjaminanSep($data = [])
    {
        $response = $this->post('Sep/pengajuanSEP', $data);
        return json_decode($response, true);
    }
    public function approvalPenjaminanSep($data = [])
    {
        $response = $this->post('Sep/aprovalSEP', $data);
        return json_decode($response, true);
    }
    public function updateTglPlg($data = [])
    {
        $response = $this->put('Sep/updtglplg', $data);
        return json_decode($response, true);
    }

    public function inacbgSEP($keyword)
    {
        $response = $this->get('sep/cbg/'.$keyword);
        return json_decode($response, true);
    }
}