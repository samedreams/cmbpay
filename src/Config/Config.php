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

namespace Codemore\Cmbpay\Config;

use winwin\support\Attribute;

class Config extends Attribute
{
    const VERSION = '1.0';
    const SIGN_TYPE = 'SHA-256';

    protected $attributes = [
        'version',
        'signType',
        'secret',
        'route',  // 路由
        'gateway', // 支付网关 URL
    ];

    protected $requirements = [
        'version',
        'signType',
        'secret',
        'route',
        'gateway',
    ];

    public function __construct(array $config)
    {
        parent::__construct(array_merge([
            'version' => self::VERSION,
            'signType' => self::SIGN_TYPE,
        ], $config));
    }
}
