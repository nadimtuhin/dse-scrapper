<?php
namespace NadimTuhin\DSE;
use Symfony\Component\DomCrawler\Crawler;

class Transformer {
    public function transform($stocksData)
    {
        $keys = array(
            'trading_code',
            'ltp',
            'high',
            'low',
            'closep',
            'ycp',
            'change',
            'trade',
            'value',
            'volume'
        );

        return array_map(function($stockData) use ($keys){
            //first entry is not needed
            array_shift($stockData);

            //now we have keyed data
            return array_combine($keys, $stockData);
        }, $stocksData);
    }
}