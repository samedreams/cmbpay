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

namespace Codemore\Cmbpay\Constants;

use kuiper\helper\Enum;

class Routes extends Enum
{
    const PAY = '/CmbBank_B2B/UI/NetPay/DoBusiness.ashx';
}
