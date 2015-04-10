<?php
namespace NadimTuhin\DSE;

class DseScrapper{
    public function scrap()
    {
		// $html = file_get_contents(base_path('resources/views/dse.php'));
		$downloader = new Downloader();
		$parser = new Parser();
		$transformer = new Transformer();
		
		$html = $downloader->download();
		$data = $parser->parse($html);
		$data = $transformer->transform($data);

		return $data;
    }
}