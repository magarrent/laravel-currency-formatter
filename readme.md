# Laravel Currency Formatter

Tiny Laravel worldwide currency formatter

![Laravel Currency Formatter](https://user-images.githubusercontent.com/6561770/128357354-34e67b91-3f76-4e8f-92db-186843517f99.png)


![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)
![Package Size](https://img.shields.io/github/languages/code-size/magarrent/laravel-currency-formatter)

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/magarrent)
## Install
`composer require magarrent/laravel-currency-formatter`

## Usage

```
use Magarrent\LaravelCurrencyFormatter\Facades\Currency

Currency::currency("EUR")->format(256)          // 256,00 €
Currency::currency("EUR")->format(256, true)    // 256 €
Currency::currency("USD")->format(256)          // $256,00
Currency::currency("USD")->format(256, true)    // $256

Currency::currency("GBP")->format(256)          // £256.00
Currency::currency("BTC")->format(256)          // 256.00000000Ƀ

Currency::currency("USD")->format(123456789)    // $123,456,789.00
Currency::currency("EUR")->format(123456789)    // 123.456.789,00 €
```

Available Currencies:

```
- AED
- AFN
- ALL
- AMD
- ANG
- AOA
- ARS
- AUD
- AWG
- AZN
- BAM
- BBD
- BDT
- BGN
- BHD
- BIF
- BMD
- BND
- BOB
- BRL
- BSD
- BTC
- BTN
- BWP
- BYR
- BYN
- BZD
- CAD
- CDF
- CHF
- CLP
- CNY
- COP
- CRC
- CUC
- CUP
- CVE
- CZK
- DJF
- DKK
- DOP
- DZD
- EGP
- ERN
- ETB
- EUR
- FJD
- FKP
- GBP
- GEL
- GHS
- GIP
- GMD
- GNF
- GTQ
- GYD
- HKD
- HNL
- HRK
- HTG
- HUF
- IDR
- ILS
- INR
- IQD
- IRR
- ISK
- JMD
- JOD
- JPY
- KES
- KGS
- KHR
- KMF
- KPW
- KRW
- KWD
- KYD
- KZT
- LAK
- LBP
- LKR
- LRD
- LSL
- LYD
- MAD
- MDL
- MGA
- MKD
- MMK
- MNT
- MOP
- MRO
- MTL
- MUR
- MVR
- MWK
- MXN
- MYR
- MZN
- NAD
- NGN
- NIO
- NOK
- NPR
- NZD
- OMR
- PAB
- PEN
- PGK
- PHP
- PKR
- PLN
- PYG
- QAR
- RON
- RSD
- RUB
- RWF
- SAR
- SBD
- SCR
- SDD
- SDG
- SEK
- SGD
- SHP
- SLL
- SOS
- SRD
- STD
- SVC
- SYP
- SZL
- THB
- TJS
- TMT
- TND
- TOP
- TRY
- TTD
- TVD
- TWD
- TZS
- UAH
- UGX
- USD
- UYU
- UZS
- VEB
- VEF
- VND
- VUV
- WST
- XAF
- XCD
- XBT
- XOF
- XPF
- YER
- ZAR
- ZMW
- WON
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marc Garcia Torrent (Kodio Technologies)](https://github.com/magarrent)
- [Soroush Mirzaei - NPM Currency list JSON](https://github.com/smirzaei/currency-formatter)
- [All Contributors](https://github.com/magarrent/laravel-currency-formatter/contributors)

## Security
If you discover any security-related issues, use the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
