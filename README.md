# BPJS Kesehatan Indonesia
PHP package to access BPJS Kesehatan API :ambulance:.
This package is a wrapper of BPJS VClaim Web Service
https://apijkn-dev.bpjs-kesehatan.go.id

Created because i don't really wanna get my hands dirty coz of using the old php-curl
:shit: example.

#### Installation :fire:

`composer require purnama97/bpjs-bridging`

#### Example Usage :confetti_ball:
```php
//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://apijkn-dev.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest-dev'
    'user_key' => '123456'
];

// use Referensi service
// https://apijkn-dev.bpjs-kesehatan.go.id/VClaim-Katalog/Referensi


#### Supported Services (WIP) :rocket:

- [x] Referensi
- [x] Peserta
- [x] SEP
- [x] Rujukan
- [x] Lembar Pengajuan Klaim
- [x] Monitoring
- [x] Aplicare


#### Contributions :ok_hand:
Your contribution is always welcome!
