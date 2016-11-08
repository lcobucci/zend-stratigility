<?php
/**
 * @link      https://github.com/zendframework/zend-stratigility for the canonical source repository
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://framework.zend.com/license New BSD License
 */

namespace Zend\Stratigility\Middleware;

use Psr\Http\Message\ResponseInterface;

class CallableMiddlewareWrapperFactory
{
    /**
     * @var ResponseInterface
     */
    private $responsePrototype;

    /**
     * @param ResponseInterface $prototype
     */
    public function __construct(ResponseInterface $prototype)
    {
        $this->responsePrototype = $prototype;
    }

    /**
     * @param callable $middleware
     * @return CallableMiddlewareWrapper
     */
    public function decorateCallableMiddleware(callable $middleware)
    {
        return new CallableMiddlewareWrapper($middleware, $this->responsePrototype);
    }
}
