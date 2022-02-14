<?php
namespace Purnama97\Bpjs\VClaim;

use Purnama97\Bpjs\BpjsService;

class Rujukan extends BpjsService
{

    public function insertRujukan($data = [])
    {
        $response = $this->post('Rujukan/2.0/insert', $data);
        return json_decode($response, true);
    }
    public function updateRujukan($data = [])
    {
        $response = $this->put('Rujukan/2.0/update', $data);
        return json_decode($response, true);
    }
    public function deleteRujukan($data = [])
    {
        $response = $this->delete('Rujukan/2.0/delete', $data);
        return json_decode($response, true);
    }

    public function insertRujukanKhusus($data = [])
    {
        $response = $this->post('Rujukan/Khusus/insert', $data);
        return json_decode($response, true);
    }
    public function update($data = [])
    {
        $response = $this->put('Rujukan/Khusus/update', $data);
        return json_decode($response, true);
    }
    public function deleteRujukanKhusus($data = [])
    {
        $response = $this->delete('Rujukan/Khusus/delete', $data);
        return json_decode($response, true);
    }

    public function cariByNoRujukan($searchBy, $keyword)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/'.$keyword;
        } else {
            $url = 'Rujukan/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }

    public function spesialistikRujukan($kodePPK, $tglRujukan)
    {
        $response = $this->get('Rujukan/ListSpesialistik/PPKRujukan/'.$kodePPK.'/TglRujukan/'.$tglRujukan);
        return json_decode($response, true);
    }

    public function saranaRujukan($kodePPK)
    {
        $response = $this->get('Rujukan/ListSarana/PPKRujukan/'.$kodePPK);
        return json_decode($response, true);
    }

    public function cariByNoKartu($searchBy, $keyword, $multi = false)
    {
        $record = $multi ? 'List/' : '';
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/Peserta/'.$keyword;
        } else {
            $url = 'Rujukan/'.$record.'Peserta/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }

    public function cariByTglRujukan($searchBy, $keyword)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/TglRujukan/'.$keyword;
        } else {
            $url = 'Rujukan/List/Peserta/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }

    public function cariRujukanKhusus($bulan, $tahun)
    {
        $response = $this->get('Rujukan/Khusus/List/Bulan/'.$bulan.'/Tahun/'.$tahun.'');
        return json_decode($response, true);
    }
}