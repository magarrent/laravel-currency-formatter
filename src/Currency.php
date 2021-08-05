<?php

namespace Magarrent\LaravelCurrencyFormatter;

class Currency {

    private Float $money;
    private String $currency = 'USD';
    private Array $currencyOptions;

    public function __construct()
    {

    }

    public function currency(String $currency = 'USD') {
        $this->currency = $currency;

        $currencies = require(__DIR__ . '/resources/Currencies.php');

        if(!isset($currencies[$currency])) throw new \Exception("Currency {$currency} not found", 1);

        $this->currencyOptions = $currencies[$currency];

        return $this;
    }

    public function format(Float $money , Bool $zeroDecimals = false): String {
        $format = '';

        if($this->currencyOptions['symbolOnLeft']) {
            $format .= $this->currencyOptions['symbol'];

            if($this->currencyOptions['spaceBetweenAmountAndSymbol']) $format .= ' ';
        }

        $format .= number_format($money,  $zeroDecimals ? 0 : $this->currencyOptions['decimalDigits'], $this->currencyOptions['decimalSeparator'], $this->currencyOptions['thousandsSeparator']);

        if (!$this->currencyOptions['symbolOnLeft']) {
            if ($this->currencyOptions['spaceBetweenAmountAndSymbol']) $format .= ' ';

            $format .= $this->currencyOptions['symbol'];
        }

        return $format;
    }

}
