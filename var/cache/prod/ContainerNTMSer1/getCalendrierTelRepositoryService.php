<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendrierTelRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CalendrierTelRepository' shared autowired service.
     *
     * @return \App\Repository\CalendrierTelRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CalendrierTelRepository'] = new \App\Repository\CalendrierTelRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}