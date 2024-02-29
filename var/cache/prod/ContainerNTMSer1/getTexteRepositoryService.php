<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTexteRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TexteRepository' shared autowired service.
     *
     * @return \App\Repository\TexteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TexteRepository'] = new \App\Repository\TexteRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
