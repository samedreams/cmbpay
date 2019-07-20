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

namespace Codemore\Cmbpay;

use Codemore\Cmbpay\Core\AbstractAPI;
use Codemore\Cmbpay\Core\Util;
use Codemore\Cmbpay\Payment\Pay;
use Psr\Http\Message\ServerRequestInterface;

class Client extends AbstractAPI
{
    /**
     * @var ServerRequestInterface
     */
    protected $request;

    /**
     * @return ServerRequestInterface
     */
    public function getRequest()
    {
        if ($this->request === null) {
            $this->request = Util::createRequestFromGlobals();
        }

        return $this->request;
    }

    public function setRequest(ServerRequestInterface $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @param  Pay   $pay
     * @return array
     */
    public function pay(Pay $pay): array
    {
    }
}
