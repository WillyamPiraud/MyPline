<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObligationMetierRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ObligationMetierRepository' shared autowired service.
     *
     * @return \App\Repository\ObligationMetierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ObligationMetierRepository'] = new \App\Repository\ObligationMetierRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}