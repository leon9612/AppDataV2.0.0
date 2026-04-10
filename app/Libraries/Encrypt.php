<?php

namespace App\Libraries;

class Encrypt
{
    private $secret_key = 'LDKSAFH743SDF87SDBDS690SDFN78SD0';
    private $secret_iv = 'HJ4NJF76FGM8FNSW543F94NTG09DFN48';
    
    function encrypt($string) {
        $key = hash('sha256', $this->secret_key);
        $iv = substr(hash('sha256', $this->secret_iv), 0, 16);
        $output = openssl_encrypt($string, "AES-256-CBC", $key, 0, $iv);
        return base64_encode($output);
    }
    
    function decrypt($string) {
        $key = hash('sha256', $this->secret_key);
        $iv = substr(hash('sha256', $this->secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), "AES-256-CBC", $key, 0, $iv);
        return $output;
    }
}