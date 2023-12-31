<?php

namespace ContainerXAynhL8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FDsJWyrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fDsJWyr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fDsJWyr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'request' => ['privates', '.errored.QOfOpYw', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::login()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'authenticationUtils' => '?',
            'request' => '?',
        ]);
    }
}
