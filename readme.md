# Dhaka Stock Exchange Scrapper

## Install 
install using composer
```json
{
    "require": {
        "nadimtuhin/dse-scrapper": "*"
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