<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBjCbsSB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBjCbsSB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBjCbsSB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBjCbsSB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBjCbsSB\App_KernelDevDebugContainer([
    'container.build_hash' => 'BjCbsSB',
    'container.build_id' => '6519e1e4',
    'container.build_time' => 1655220404,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBjCbsSB');
