<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9uUSJdq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9uUSJdq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9uUSJdq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9uUSJdq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9uUSJdq\App_KernelDevDebugContainer([
    'container.build_hash' => '9uUSJdq',
    'container.build_id' => '45ca25fa',
    'container.build_time' => 1624841874,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9uUSJdq');
