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

if (!function_exists('sha256')) {

    /**
     * @param  string $string
     * @return string
     */
    function sha256(string $string)
    {
        return hash('sha256', $string);
    }
}
