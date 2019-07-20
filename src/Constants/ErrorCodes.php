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

class ErrorCodes extends Enum
{
    /**
     * @see  https://www.showdoc.cc/nopwPaymode2?page_id=1921258618606241
     */
    const DCB0001 = 'DCB0001';
    const DCB0002 = 'DCB0002';
    const DCB0003 = 'DCB0003';
    const DCB0004 = 'DCB0004';
    const DCB0005 = 'DCB0005';

    /**
     * @var array
     *
     * @todo  补充全部的错误码
     */
    protected static $PROPERTIES = [
        'description' => [
            self::DCB0001 => 'DCB0001 贵方发送错误报文数太多，已被限制访问',
            self::DCB0002 => 'DCB0002 请求报文数据不能为空',
            self::DCB0003 => 'DCB0003 请求报文JSON格式错误!',
            self::DCB0004 => 'DCB0004 请求报文数据有误； 请求报文长度过长',
            self::DCB0005 => 'DCB0005 商户未开通接入平台功能',

        ],
    ];
}
