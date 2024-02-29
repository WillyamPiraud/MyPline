<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRendezVousRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RendezVousRepository' shared autowired service.
     *
     * @return \App\Repository\RendezVousRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RendezVousRepository'] = new \App\Repository\RendezVousRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
