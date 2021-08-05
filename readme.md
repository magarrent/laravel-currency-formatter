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

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marc Garcia Torrent (Kodio Technologies)](https://github.com/magarrent)
- [All Contributors](https://github.com/magarrent/laravel-currency-formatter/contributors)

## Security
If you discover any security-related issues, please email magarrent@gmail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
