<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObligationMetierTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ObligationMetierType' shared autowired service.
     *
     * @return \App\Form\ObligationMetierType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ObligationMetierType'] = new \App\Form\ObligationMetierType();
    }
}
