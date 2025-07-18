<?php
function checkPaymentCurrency($currency,$payment_method) {
    $strictly_euro = in_array($payment_method,['cardgateideal',
        'cardgateidealqr',
        'cardgatebancontact',
        'cardgatebanktransfer',
        'cardgatebillink',
        'cardgatesofortbanking',
        'cardgatedirectdebit',
        'cardgateonlineueberweisen',
        'cardgatespraypay']);
    if ($strictly_euro && $currency != 'EUR') return false;

    $strictly_pln = in_array($payment_method,['cardgateprzelewy24']);
    if ($strictly_pln && $currency != 'PLN') return false;
    return true;
}
