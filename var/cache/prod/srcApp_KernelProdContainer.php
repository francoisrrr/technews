<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOHfXu04\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOHfXu04/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerOHfXu04.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerOHfXu04\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerOHfXu04\srcApp_KernelProdContainer([
    'container.build_hash' => 'OHfXu04',
    'container.build_id' => 'd4221049',
    'container.build_time' => 1555334523,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOHfXu04');
