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

namespace Codemore\Cmbpay\Merchant;

use winwin\support\Attribute;

/**
 * Class QueryPubicKey
 * @see  https://www.showdoc.cc/nopwPaymode2?page_id=1758921677164869
 */
class QueryPubicKey extends Attribute
{
    /**
     * @var array 全部参数
     */
    protected $attributes = [
        'version',  // 固定为1.0
        'sign',    // 	使用商户支付密钥对reqData内的数据进行签名
        'signType', // 固定为SHA-256
        'reqData',  // array 请求数据
        'dateTime', // 请求时间，商户发起该请求的时间，精确到秒。 格式：yyyyMMddHHmmss  20160623101430
        'txCode', // 交易码，固定为FBPK
        'branchNo', // 商户分行号，4位数字
        'merchantNo', // 商户号，6位数字
    ];

    /**
     * @var array 必传参数
     */
    protected $requirements = [
        'version',  // 固定为1.0
        'sign',    // 	使用商户支付密钥对reqData内的数据进行签名
        'signType', // 固定为SHA-256
        'reqData',  // array 请求数据
        'dateTime', // 请求时间，商户发起该请求的时间，精确到秒。 格式：yyyyMMddHHmmss  20160623101430
        'txCode', // 交易码，固定为FBPK
        'branchNo', // 商户分行号，4位数字
        'merchantNo', // 商户号，6位数字
    ];
}
