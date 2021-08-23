# Laravel Currency Formatter

Tiny Laravel worldwide currency formatter

![Laravel Currency Formatter](https://user-images.githubusercontent.com/6561770/128357354-34e67b91-3f76-4e8f-92db-186843517f99.png)


![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)
![Package Size](https://img.shields.io/github/languages/code-size/magarrent/laravel-currency-formatter)

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/magarrent)
## Install
`composer require magarrent/laravel-currency-formatter`

## Usage

```php
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

**Use custom currency Symbol**
```php
Currency::currency("RSD")->setSymbol("Din")->format(123456789)  // 123.456.789,00 Din
```

Available Currencies:

```bash
AED - د.إ.‏
AFN - ؋
ALL - Lek
AMD - ֏
ANG - ƒ
AOA - Kz
ARS - $
AUD - $
AWG - ƒ
AZN - ₼
BAM - КМ
BBD - $
BDT - ৳
BGN - лв.
BHD - د.ب.‏
BIF - FBu
BMD - $
BND - $
BOB - Bs
BRL - R$
BSD - $
BTC - Ƀ
BTN - Nu.
BWP - P
BYR - р.
BYN - р.
BZD - BZ$
CAD - $
CDF - FC
CHF - CHF
CLP - $
CNY - ¥
COP - $
CRC - ₡
CUC - CUC
CUP - $MN
CVE - $
CZK - Kč
DJF - Fdj
DKK - kr.
DOP - RD$
DZD - د.ج.‏
EGP - ج.م.‏
ERN - Nfk
ETB - ETB
EUR - €
FJD - $
FKP - £
GBP - £
GEL - GEL
GHS - ₵
GIP - £
GMD - D
GNF - FG
GTQ - Q
GYD - $
HKD - HK$
HNL - L.
HRK - kn
HTG - G
HUF - Ft
IDR - Rp
ILS - ₪
INR - ₹
IQD - د.ع.‏
IRR - ﷼
ISK - kr.
JMD - J$
JOD - د.ا.‏
JPY - ¥
KES - KSh
KGS - сом
KHR - ៛
KMF - CF
KPW - ₩
KRW - ₩
KWD - د.ك.‏
KYD - $
KZT - ₸
LAK - ₭
LBP - ل.ل.‏
LKR - ₨
LRD - $
LSL - M
LYD - د.ل.‏
MAD - د.م.‏
MDL - lei
MGA - Ar
MKD - ден.
MMK - K
MNT - ₮
MOP - MOP$
MRO - UM
MTL - ₤
MUR - ₨
MVR - MVR
MWK - MK
MXN - $
MYR - RM
MZN - MT
NAD - $
NGN - ₦
NIO - C$
NOK - kr
NPR - ₨
NZD - $
OMR - ﷼
PAB - B/.
PEN - S/.
PGK - K
PHP - ₱
PKR - ₨
PLN - zł
PYG - ₲
QAR - ﷼
RON - L
RSD - Дин.
RUB - ₽
RWF - RWF
SAR - ﷼
SBD - $
SCR - ₨
SDD - LSd
SDG - £‏
SEK - kr
SGD - $
SHP - £
SLL - Le
SOS - S
SRD - $
STD - Db
SVC - ₡
SYP - £
SZL - E
THB - ฿
TJS - TJS
TMT - m
TND - د.ت.‏
TOP - T$
TRY - ₺
TTD - TT$
TVD - $
TWD - NT$
TZS - TSh
UAH - ₴
UGX - USh
USD - $
UYU - $U
UZS - сўм
VEB - Bs.
VEF - Bs. F.
VND - ₫
VUV - VT
WST - WS$
XAF - F
XCD - $
XBT - Ƀ
XOF - F
XPF - F
YER - ﷼
ZAR - R
ZMW - ZK
WON - ₩
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
