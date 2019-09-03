#Coinpayments PHP SDK
> Biblioteca para se conectar com https://www.coinpayments.net


Futuramente adicionaremos outras funções.

## Instalação

Via composer:

```sh
composer require phabloraylan/coinpayments-php
```

## Usando

Inclua o autoload em seu projeto, exemplo:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

Criando uma simples transação

```php
/** Scenario: Create a simple transaction. **/

// Create a new API wrapper instance
$private_key= "";
$public_key = "";
$cps_api = new \Coinpayments\CoinpaymentsAPI($private_key, $public_key, 'json');

// Make call to API to create the transaction
try {

    $fields = [
        'amount' => 100.00,
        'currency1' => 'BRL',
        'currency2' => 'LTCT',
        'buyer_email' => 'phabloraylan@gmail.com'
    ];
    $transaction_response = $cps_api->CreateCustomTransaction($fields);
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}

if ($transaction_response['error'] == 'ok') {
    // Success!
    $output = 'Transaction created with ID: ' . $transaction_response['result']['txn_id'] . '<br>';
    $output .= 'Amount for buyer to send: ' . $transaction_response['result']['amount'] . '<br>';
    $output .= 'Address for buyer to send to: ' . $transaction_response['result']['address'] . '<br>';
    $output .= 'Seller can view status here: ' . $transaction_response['result']['status_url'];

} else {
    // Something went wrong!
    $output = 'Error: ' . $transaction_response['error'];
}

// Output the response of the API call
echo $output;

```
