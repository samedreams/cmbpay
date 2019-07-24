<?php declare(strict_types=1);
/**
 *
 * This file is part of the codemore/cmbpay package.
 *
 * (c) Codemore https://github.com/samedreams/cmbpay
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codemore\Cmbpay\Tests;

use Codemore\Cmbpay\Client;
use Codemore\Cmbpay\Config\Config;
use Codemore\Cmbpay\Payment\Pay;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class ClientTest extends TestCase
{
    private $client;

    public function setUp()
    {
        parent::setUp();

        $logger = new Logger('API');
        $logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

        $client = new Client(new Config(
            [
                'version' => \env('VERSION', '1.0'),
                'signType' => \env('SIGN_TYPE', 'sha256'),
                'url' => \env('URL', '/UI/NetPay/DoBusiness.ashx'),
                'gateway' => \env('GATEWAY', 'https://baidu.com'),
                'secret' => 'ssss',
            ]
        ));
        $client->setLogger($logger);

        $this->client = $client;
    }

    public function testFunction()
    {
        $str = \sha256('sha256');
        $this->assertIsString($str);
        var_dump($str);
        $s =  call_user_func('sha256', 'x');

        var_dump($s);
    }

    public function testPay()
    {
        $this->assertNotNull($this->client);
        $this->assertInstanceOf(Client::class, $this->client);

        $this->client->pay(new Pay());
    }
}
