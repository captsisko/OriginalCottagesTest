<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW4xdf7g\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW4xdf7g/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW4xdf7g.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW4xdf7g\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerW4xdf7g\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'W4xdf7g',
    'container.build_id' => 'e3e61592',
    'container.build_time' => 1569848730,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW4xdf7g');
