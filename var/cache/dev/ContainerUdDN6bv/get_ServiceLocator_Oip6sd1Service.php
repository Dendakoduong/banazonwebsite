<?php

namespace ContainerUdDN6bv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Oip6sd1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oip6sd1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oip6sd1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'headersRepository' => ['privates', 'App\\Repository\\HeadersRepository', 'getHeadersRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'headersRepository' => 'App\\Repository\\HeadersRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
