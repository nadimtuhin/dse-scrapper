<?php
namespace NadimTuhin\DSE;

class Downloader{
    public function request($host, $referer)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_REFERER, $referer);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    public function download(){
        $host  = 'http://dsebd.org/latest_share_price_all.php';
        $referer = 'http://dsebd.org/latest_share_price_scroll_l.php';

        return $this->request($host, $referer);
    }
}