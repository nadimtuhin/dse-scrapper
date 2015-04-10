# Dhaka Stock Exchange Scrapper

## Install 
install using composer
```json
{
    "require": {
        "nadimtuhin/dse-scrapper": "dev-master"
    }
}
```

## Usage
```php
require_once('vendor/autoload.php');

$scrapper = new NadimTuhin\DSE\DseScrapper();
$data = $scrapper->scrap();

print_r($data);
```


data structure
```php
[
    [
        "trading_code" => "1JANATAMF",
        "ltp" => "4.1",
        "high" => "4.3",
        "low" => "4.1",
        "closep" => "4.1",
        "ycp" => "4.3",
        "change" => "-0.2",
        "trade" => "80",
        "value" => "1.187",
        "volume" => "283,615",
    ],
    .....
]
```