<div align="center">

# DSE Scrapper

![DSE Scrapper: Dhaka Stock Exchange prices as a PHP array](https://raw.githubusercontent.com/nadimtuhin/dse-scrapper/master/docs/images/hero.svg)

**One call, one array.** Back when DSE served the page.

`MIT` `PHP 5.4+` `Composer`

</div>

<br>

![Get started](https://raw.githubusercontent.com/nadimtuhin/dse-scrapper/master/docs/images/h-start.svg)

> [!WARNING]
> This no longer works. DSE retired the page the scraper reads (`latest_share_price_all.php` now returns 410 Gone), so `scrap()` returns an empty array. Kept for reference.

**1. Add it to `composer.json`:**

```json
{
    "require": {
        "nadimtuhin/dse-scrapper": "0.1.*@dev"
    }
}
```

**2. Install:**

```bash
composer install
```

**3. Run it:**

```php
require_once('vendor/autoload.php');

$scrapper = new NadimTuhin\DSE\DseScrapper();
$data = $scrapper->scrap();

print_r($data);
```

Save as `run.php`, then run `php run.php`.

<br>

![How it works](https://raw.githubusercontent.com/nadimtuhin/dse-scrapper/master/docs/images/h-how.svg)

**Three small steps.** `Downloader` fetches the latest share price page from `dsebd.org`. `Parser` reads each table row. `Transformer` names the columns.

**Values stay as text.** Numbers come back as strings, like `"1,105"`, so convert them yourself if you need math.

<br>

![For developers](https://raw.githubusercontent.com/nadimtuhin/dse-scrapper/master/docs/images/h-dev.svg)

Everything below is reference. You don't need it to get started.

# Dhaka Stock Exchange Scrapper
Scrapping Dhaka Stock Exchange (DSE) data were never easier. Easy to use API. Pull requests, bug reports, feature requests are welcome.

## Disclaimer:
This software is to be used `For Educational Purposes Only` . If this software is used against the Terms and Conditions stated in `dsebd.org` the author would not be responsible.

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
