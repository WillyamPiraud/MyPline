<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMesLoisirsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MesLoisirsRepository' shared autowired service.
     *
     * @return \App\Repository\MesLoisirsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MesLoisirsRepository'] = new \App\Repository\MesLoisirsRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
