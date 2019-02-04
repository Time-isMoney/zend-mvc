<?php
/**
 * @see       https://github.com/zendframework/zend-mvc for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-mvc/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Zend\Mvc\Service;

use Interop\Container\ContainerInterface;
use Zend\Http\PhpEnvironment\Request as HttpRequest;
use Zend\ServiceManager\Factory\FactoryInterface;

class RequestFactory implements FactoryInterface
{
    /**
     * Create and return a request instance.
     *
     * @param  ContainerInterface $container
     * @param  string             $name
     * @param  null|array         $options
     * @return HttpRequest
     */
    public function __invoke(ContainerInterface $container, $name, ?array $options = null)
    {
        return new HttpRequest();
    }
}
