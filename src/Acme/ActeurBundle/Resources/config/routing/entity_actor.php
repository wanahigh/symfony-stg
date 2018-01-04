<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('entity_actor_index', new Route(
    '/',
    array('_controller' => 'AcmeActeurBundle:Entity\Actor:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('entity_actor_show', new Route(
    '/{id}/show',
    array('_controller' => 'AcmeActeurBundle:Entity\Actor:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('entity_actor_new', new Route(
    '/new',
    array('_controller' => 'AcmeActeurBundle:Entity\Actor:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('entity_actor_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AcmeActeurBundle:Entity\Actor:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('entity_actor_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AcmeActeurBundle:Entity\Actor:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
