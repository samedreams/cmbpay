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

namespace Codemore\Cmbpay\Payment;

use winwin\support\Attribute;

/**
 * Class Pay
 * @see  https://www.showdoc.cc/nopwPaymode2?page_id=1759154187900432
 */
class Pay extends Attribute
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
        'merchantSerialNo', // 商户交易请求流水号，全局唯一
        'agrNo',  //客户签约的协议号
        'currency',  // 币种，目前只支持人民币，固定为 RMB
        'amount',  //交易金额，以分为单位，如2000表示20.00元
        'trnAbs',  //交易摘要，简要描述交易的关键信息
        'noticeUrl',  //结果异步通知URL (地址仅支持http 80端口和https 443端口），用于银行异步发送交易结果
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
        'merchantSerialNo', // 商户交易请求流水号，全局唯一
        'agrNo',  //客户签约的协议号
        'currency',  // 币种，目前只支持人民币，固定为 RMB
        'amount',  //交易金额，以分为单位，如2000表示20.00元
        'trnAbs',  //交易摘要，简要描述交易的关键信息
        'noticeUrl',  //结果异步通知URL (地址仅支持http 80端口和https 443端口），用于银行异步发送交易结果
    ];
}
