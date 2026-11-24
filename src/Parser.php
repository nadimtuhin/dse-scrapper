<?php
namespace NadimTuhin\DSE;

class Parser {
    public function parse($json)
    {
        $snapshot = json_decode($json, true);

        if (!isset($snapshot['prices']['cols'], $snapshot['prices']['rows'])) {
            throw new \UnexpectedValueException('DSE snapshot has no price table');
        }

        $cols = $snapshot['prices']['cols'];

        // name each value by its column, so a column reorder can't shift fields
        return array_map(function($row) use ($cols){
            return array_combine($cols, $row);
        }, $snapshot['prices']['rows']);
    }
}
