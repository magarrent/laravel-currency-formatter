<?php

namespace Magarrent\LaravelCurrencyFormatter;

class Currency {

    private Array $currencyOptions;


    /**
     * Select currency: EUR, USD, BTC...
     *
     * @param string $currency
     * @return void
     */
    public function currency(String $currency = 'USD') {
        $this->currency = $currency;

        $currencies = require(__DIR__ . '/resources/Currencies.php');

        if(!isset($currencies[$currency])) throw new \Exception("Currency {$currency} not found", 1);

        $this->currencyOptions = $currencies[$currency];

        return $this;
    }

    /**
     * Format selected currency
     *
     * @param Float $money
     * @param boolean $zeroDecimals
     * @return String
     */
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

    public function setSymbol(String $customSymbol) {
        $this->currencyOptions['symbol'] = $customSymbol;

        return $this;
    }

}
