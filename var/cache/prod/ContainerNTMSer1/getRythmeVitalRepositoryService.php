<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRythmeVitalRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RythmeVitalRepository' shared autowired service.
     *
     * @return \App\Repository\RythmeVitalRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RythmeVitalRepository'] = new \App\Repository\RythmeVitalRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}