<?php

namespace ContainerHI7IvtG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeJsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CodeJsType' shared autowired service.
     *
     * @return \App\Form\CodeJsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CodeJsType.php';

        return $container->privates['App\\Form\\CodeJsType'] = new \App\Form\CodeJsType();
    }
}
