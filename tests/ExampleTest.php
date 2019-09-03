<?php
namespace CoinPayments;

class ExampleTest extends TestCase
{
    public function testExample()
    {

        $fields = [
            'cmd' => '_pay_simple',
            'reset' => '1',
            'merchant' => '606a89bb575311badf510a4a8b79a45e',
            'currency' => 'BRL',
            'amountf' => '10.00',
            'item_name' => 'Test'
        ];

        $botao = new Botao($fields);
        $result = $botao->executar();
        echo (string) $result;

        $this->assertTrue(true);
    }
}