<?php

namespace ContainerWe57wfe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeFrontFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CodeFrontFormType' shared autowired service.
     *
     * @return \App\Form\CodeFrontFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CodeFrontFormType.php';

        return $container->privates['App\\Form\\CodeFrontFormType'] = new \App\Form\CodeFrontFormType();
    }
}
