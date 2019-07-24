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

use Codemore\Cmbpay\Payment\Pay;
use Codemore\Cmbpay\Payment\Refund;
use winwin\support\Collection;

interface ClientInterface
{
    /**
     * @param  Pay        $pay
     * @return Collection
     */
    public function pay(Pay $pay): Collection;

    /**
     * @param  Refund     $refund
     * @return Collection
     */
    public function refund(Refund $refund): Collection;
}
