# Dhaka Stock Exchange Scrapper
Scrapping Dhaka Stock Exchange (DSE) data were never easier. Easy to use API. Pull requests, bug reports, feature requests are welcome.

## NOTE:
This software is to be used `For Educational Purposes Only` . If this software is used against the Terms and Conditions stated in dsebd.org I would not responsible.

## Install 
install using composer
```json
{
    "require": {
        "nadimtuhin/dse-scrapper": "0.1.*@dev"
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


## Data Structure
```php
array:321 [▼
  0 => array:10 [▼
    "trading_code" => "1JANATAMF"
    "ltp" => "4.1"
    "high" => "4.3"
    "low" => "4.1"
    "closep" => "4.1"
    "ycp" => "4.3"
    "change" => "-0.2"
    "trade" => "80"
    "value" => "1.187"
    "volume" => "283,615"
  ]
  1 => array:10 [▼
    "trading_code" => "1STICB"
    "ltp" => "1,105"
    "high" => "1,105"
    "low" => "1,103.9"
    "closep" => "1,104"
    "ycp" => "1,075"
    "change" => "30"
    "trade" => "5"
    "value" => "0.05"
    "volume" => "45"
  ]
  2 => array:10 [▶]
  3 => array:10 [▶]
  4 => array:10 [▶]
  5 => array:10 [▶]
  6 => array:10 [▶]
  7 => array:10 [▶]
  8 => array:10 [▶]
  9 => array:10 [▶]
  10 => array:10 [▶]
  11 => array:10 [▶]
  12 => array:10 [▶]
  13 => array:10 [▶]
  ....
```