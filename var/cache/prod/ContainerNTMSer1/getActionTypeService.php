<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ActionType' shared autowired service.
     *
     * @return \App\Form\ActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ActionType'] = new \App\Form\ActionType();
    }
}
