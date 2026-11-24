<?php
namespace NadimTuhin\DSE;

class DseScrapper {
    private $downloader;

    public function __construct(?Downloader $downloader = null)
    {
        $this->downloader = $downloader ?: new Downloader();
    }

    public function scrap()
    {
        $parser = new Parser();
        $transformer = new Transformer();

        $json = $this->downloader->download();
        $data = $parser->parse($json);
        $data = $transformer->transform($data);

        return $data;
    }
}
