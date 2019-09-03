# coinpayments-php-sdk
Biblioteca para se conectar ao https://www.coinpayments.net com o ID do Operador

## Instalação

Via composer:

```sh
composer require phabloraylan/coinpayments-php-sdk
```

## Usando

Inclua o autoload em seu projeto, exemplo:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

## Exemplo de botão simples

```php
$fields = [
  'cmd' => '_pay_simple',
  'reset' => '1',
  'merchant' => '<id-operador>',
  'currency' => 'BRL',
  'amountf' => '10.00',
  'item_name' => 'Test',
  'success_url' => '<url-sucesso>',
  'cancel_url' => '<url-cancel>'
];//Para ver mais campos disponíveis acesse a documentação em https://www.coinpayments.net/merchant-tools-simple

$botao = new \CoinPayments\Botao($fields);
$result = $botao->executar(); //Retorna pagina em html do checkout
```
