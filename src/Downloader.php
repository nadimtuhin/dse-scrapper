<?php
namespace NadimTuhin\DSE;

class Downloader {
    public function request($host, $referer)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_REFERER, $referer);
        // dsebd.org answers 403 to requests without a User-Agent
        curl_setopt($ch, CURLOPT_USERAGENT, 'nadimtuhin/dse-scrapper');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);

        if ($result === false) {
            throw new \RuntimeException('Request to ' . $host . ' failed: ' . curl_error($ch));
        }

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($status >= 400) {
            throw new \RuntimeException('Request to ' . $host . ' returned HTTP ' . $status);
        }

        return $result;
    }

    public function download(){
        $host  = 'https://www.dsebd.org/api/live/snapshot';
        $referer = 'https://www.dsebd.org/markets/latest-share-price';

        return $this->request($host, $referer);
    }
}
