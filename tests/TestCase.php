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

use Dotenv\Dotenv;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass()
    {
        date_default_timezone_set('Asia/Shanghai');
        if (file_exists(__DIR__.'/.env')) {
            (new Dotenv(__DIR__))->load();
        }
    }

    public function testOne()
    {
        $this->assertTrue(true);
    }
}
