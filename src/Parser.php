<?php
namespace NadimTuhin\DSE;
use Symfony\Component\DomCrawler\Crawler;

class Parser {
    public function parse($html)
    {
        $crawler = new Crawler($html);
        $table = $crawler->filter('table');

        $data = [];

        $table->filter('tr')
            // discard thead
            ->reduce(function (Crawler $node, $i) {
                return $i != 0; 
            })
            // iterate each tr
            ->each(function(Crawler $tr, $tri) use (&$data){
                $data[$tri] = [];

                $tr->filter('td')->each(function(Crawler $td) use(&$data, $tri){
                    $data[$tri][] = trim($td->text());
                });
    
            });


        return $data;
    }
}