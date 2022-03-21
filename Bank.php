<?php

require_once "autoload.php";

// use Poo\Bank\Models\Account\{Owner, CheckingAccount, SavingAccount};
// use Poo\Bank\Models\Address;
// use Poo\Bank\Models\Employee\Manager;
// use Poo\Bank\Models\Employee\Developer;
// use Poo\Bank\Models\Employee\Director;
// use Poo\Bank\Models\Employee\VideoMaker;
// use Poo\Bank\Services\Auth\Authentication;
// use Poo\Bank\Services\BonusControl;
use Poo\Bank\Models\Strategy\Payment\CashPayment;
use Poo\Bank\Models\Strategy\Payment\BankSlipPayment;
use Poo\Bank\Models\Strategy\Payment\DebitCardPayment;
use Poo\Bank\Models\Strategy\Payment\CreditCardPayment;
use Poo\Bank\Models\Strategy\Payment\PaymentProcessor;

$paymentsMethods = [
    CashPayment::class, 
    BankSlipPayment::class,
    DebitCardPayment::class, 
    CreditCardPayment::class, 
];

foreach($paymentsMethods as $paymentsMethod) {
    $paymentProcessor = new PaymentProcessor(new $paymentsMethod);
    $paymentProcessor->processPayment(1);
    echo $paymentProcessor->getValue(). PHP_EOL;
}
