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

namespace Codemore\Cmbpay\Core;

use Codemore\Cmbpay\Config\Config;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use winwin\support\Collection;
use winwin\support\XML;
use WuJunze\HttpClient\Http;

class AbstractAPI implements LoggerAwareInterface
{
    /**
     * Http instance.
     *
     * @var Http
     */
    protected $http;

    /**
     * @var Config
     */
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->getHttp()->setLogger($logger);
    }

    /**
     * 获取接口配置.
     *
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * 获取 Http 客户端.
     *
     * @return Http
     */
    public function getHttp()
    {
        if ($this->http === null) {
            $this->setHttp(new Http());
        }

        return $this->http;
    }

    /**
     * 设置 Http 客户端.
     *
     * @param Http
     *
     * @return static
     */
    public function setHttp(Http $http)
    {
        $this->http = $http;

        return $this;
    }

    /**
     * Make a API request.
     *
     * @param string $api
     * @param array  $params
     * @param string $method
     * @param array  $options
     * @param bool   $returnResponse
     *
     * @return Collection|\Psr\Http\Message\ResponseInterface
     */
    protected function request(array $params, $method = 'post', array $options = [], $returnResponse = false)
    {
        $params = array_merge($params, $this->config->only(['version', 'sign', 'signType', 'reqData', 'dateTime']));

        $params = array_filter($params, function ($val) {
            return isset($val) && $val !== '';
        });
        $params['sign'] = Util::generateSign($params, $this->config->secret);

        $response = $this->getHttp()->request($method, $this->config->gateway, $options);

        return $returnResponse ? $response : $this->parseResponse($response);
    }

    /**
     * Parse Response XML to array.
     *
     * @param ResponseInterface $response
     *
     * @return Collection
     */
    protected function parseResponse($response)
    {
        if ($response instanceof ResponseInterface) {
            $response = $response->getBody();
        }

        return new Collection((array) \json_decode($response->__toString(), true));
    }
}
