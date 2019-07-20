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
    const VERSION = '1.0.1';
    const GATEWAY = 'https://b2b.cmbchina.com';

    protected $attributes = [
        'gateway',
        'version',
        'appid',
        'secret',
        'charset',
        'mch_id',
        'sign_type',
    ];

    protected $requirements = [
        'gateway',
        'version',
        'appid',
        'secret',
        'mch_id',
    ];

    public function __construct(array $config)
    {
        parent::__construct(array_merge([
            'version' => self::VERSION,
            'gateway' => self::GATEWAY,
        ], $config));
    }
}
