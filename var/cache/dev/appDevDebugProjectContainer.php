<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBea4tdu\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBea4tdu/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBea4tdu.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBea4tdu\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBea4tdu\appDevDebugProjectContainer();
