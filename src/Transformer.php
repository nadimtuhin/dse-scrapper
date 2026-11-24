<?php
namespace NadimTuhin\DSE;

class Transformer {
    public function transform($stocksData)
    {
        return array_map(function($stock){
            return array(
                'trading_code' => $stock['code'],
                'ltp' => $stock['ltp'],
                'high' => $stock['high'],
                'low' => $stock['low'],
                'closep' => $stock['close'],
                'ycp' => $stock['ycp'],
                // the feed has no absolute change, only percent
                'change' => round($stock['ltp'] - $stock['ycp'], 2),
                'trade' => $stock['trades'],
                'value' => $stock['value'],
                'volume' => $stock['volume'],
            );
        }, $stocksData);
    }
}
