<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\LoginAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\LoginAuthenticator'] = new \App\Security\LoginAuthenticator(($container->services['router'] ?? self::getRouterService($container)));
    }
}
