<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUdDN6bv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUdDN6bv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUdDN6bv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUdDN6bv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUdDN6bv\App_KernelDevDebugContainer([
    'container.build_hash' => 'UdDN6bv',
    'container.build_id' => 'b1007609',
    'container.build_time' => 1690537144,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUdDN6bv');
