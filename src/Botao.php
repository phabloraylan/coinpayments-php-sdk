<?php

namespace CoinPayments;

use CoinPayments\Http\Api;

class Botao implements BotaoInterface
{
    private $items = [];
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function executar()
    {
        return Api::load($this->items)->getBody();
    }

}