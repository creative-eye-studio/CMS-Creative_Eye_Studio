<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJmFxGFY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJmFxGFY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJmFxGFY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJmFxGFY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJmFxGFY\App_KernelDevDebugContainer([
    'container.build_hash' => 'JmFxGFY',
    'container.build_id' => 'ed2ae073',
    'container.build_time' => 1618566074,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJmFxGFY');
