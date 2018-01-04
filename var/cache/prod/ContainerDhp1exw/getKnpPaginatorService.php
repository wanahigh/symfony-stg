<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knp_paginator' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

$this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

$instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

return $instance;
