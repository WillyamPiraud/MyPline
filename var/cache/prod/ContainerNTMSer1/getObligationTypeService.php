<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObligationTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ObligationType' shared autowired service.
     *
     * @return \App\Form\ObligationType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ObligationType'] = new \App\Form\ObligationType();
    }
}