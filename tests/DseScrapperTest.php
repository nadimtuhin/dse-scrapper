<?php
namespace NadimTuhin\DSE\Tests;

use NadimTuhin\DSE\Downloader;
use NadimTuhin\DSE\DseScrapper;
use PHPUnit\Framework\TestCase;

class FixtureDownloader extends Downloader {
    public function download()
    {
        return file_get_contents(__DIR__ . '/fixtures/snapshot.json');
    }
}

class DseScrapperTest extends TestCase {
    public function testScrapReturnsKeyedRowsFromTheLiveSnapshot()
    {
        $scrapper = new DseScrapper(new FixtureDownloader());

        $data = $scrapper->scrap();

        $this->assertCount(2, $data);
        $this->assertSame(array(
            'trading_code' => 'GP',
            'ltp' => 226.4,
            'high' => 227.1,
            'low' => 226.3,
            'closep' => 226.4,
            'ycp' => 226.8,
            'change' => -0.4,
            'trade' => 842,
            'value' => 20.8,
            'volume' => 91801,
        ), $data[1]);
    }

    public function testRequestThrowsWhenTheServerCannotBeReached()
    {
        $this->expectException(\RuntimeException::class);

        (new Downloader())->request('http://127.0.0.1:1/', '');
    }
}
