<?php
namespace Coinpayments;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        /** Scenario: Create a simple transaction. **/

        // Create a new API wrapper instance
        $private_key= "";
        $public_key = "";
        $cps_api = new CoinpaymentsAPI($private_key, $public_key, 'json');

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

        //print_r($transferencia);
        $this->assertTrue(true);
    }
}