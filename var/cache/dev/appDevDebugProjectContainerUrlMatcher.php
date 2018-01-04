<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/assetic')) {
            // _assetic_jquery
            if ('/assetic/jquery.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
            }

            // _assetic_jquery_0
            if ('/assetic/jquery_jquery.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
            }

            if (0 === strpos($pathinfo, '/assetic/material_icons')) {
                // _assetic_material_icons
                if ('/assetic/material_icons' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'material_icons',  'pos' => NULL,  '_route' => '_assetic_material_icons',);
                }

                // _assetic_material_icons_0
                if ('/assetic/material_icons_icon?family=Material+Icons_1' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'material_icons',  'pos' => 0,  '_route' => '_assetic_material_icons_0',);
                }

            }

        }

        // _assetic_895c7d6
        if ('/js/materialize.min.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '895c7d6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_895c7d6',);
        }

        // _assetic_895c7d6_0
        if ('/js/materialize.min_materialize.min_1.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '895c7d6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_895c7d6_0',);
        }

        if (0 === strpos($pathinfo, '/fonts/Material-Design-Icons.')) {
            // _assetic_8b0f174
            if ('/fonts/Material-Design-Icons.eot' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b0f174',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_8b0f174',);
            }

            // _assetic_8455630
            if ('/fonts/Material-Design-Icons.svg' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 8455630,  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_8455630',);
            }

            // _assetic_ff2385d
            if ('/fonts/Material-Design-Icons.ttf' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ff2385d',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_ff2385d',);
            }

            if (0 === strpos($pathinfo, '/fonts/Material-Design-Icons.woff')) {
                // _assetic_dde2949
                if ('/fonts/Material-Design-Icons.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dde2949',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_dde2949',);
                }

                // _assetic_2877f38
                if ('/fonts/Material-Design-Icons.woff2' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2877f38',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_2877f38',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/fonts/Material-Design-Icons_Material-Design-Icons_1.')) {
            // _assetic_8b0f174_0
            if ('/fonts/Material-Design-Icons_Material-Design-Icons_1.eot' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b0f174',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_8b0f174_0',);
            }

            // _assetic_8455630_0
            if ('/fonts/Material-Design-Icons_Material-Design-Icons_1.svg' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 8455630,  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_8455630_0',);
            }

            // _assetic_ff2385d_0
            if ('/fonts/Material-Design-Icons_Material-Design-Icons_1.ttf' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ff2385d',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_ff2385d_0',);
            }

            if (0 === strpos($pathinfo, '/fonts/Material-Design-Icons_Material-Design-Icons_1.woff')) {
                // _assetic_dde2949_0
                if ('/fonts/Material-Design-Icons_Material-Design-Icons_1.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dde2949',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_dde2949_0',);
                }

                // _assetic_2877f38_0
                if ('/fonts/Material-Design-Icons_Material-Design-Icons_1.woff2' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2877f38',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_2877f38_0',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // _assetic_430ad3c
            if ('/css/materialize.min.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '430ad3c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_430ad3c',);
            }

            // _assetic_430ad3c_0
            if ('/css/materialize.min_materialize.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '430ad3c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_430ad3c_0',);
            }

            // acme_contact_homepage
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'Acme\\ContactBundle\\Controller\\DefaultController::contactAction',  '_route' => 'acme_contact_homepage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/entity_advert')) {
            // entity_advert_index
            if ('/entity_advert' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_entity_advert_index;
                }

                $ret = array (  '_controller' => 'Acme\\ActuBundle\\Controller\\Entity\\AdvertController::indexAction',  '_route' => 'entity_advert_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entity_advert_index'));
                }

                return $ret;
            }
            not_entity_advert_index:

            // entity_advert_show
            if (preg_match('#^/entity_advert/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_entity_advert_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_advert_show')), array (  '_controller' => 'Acme\\ActuBundle\\Controller\\Entity\\AdvertController::showAction',));
            }
            not_entity_advert_show:

            // entity_advert_new
            if ('/entity_advert/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_entity_advert_new;
                }

                return array (  '_controller' => 'Acme\\ActuBundle\\Controller\\Entity\\AdvertController::newAction',  '_route' => 'entity_advert_new',);
            }
            not_entity_advert_new:

            // entity_advert_edit
            if (preg_match('#^/entity_advert/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_entity_advert_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_advert_edit')), array (  '_controller' => 'Acme\\ActuBundle\\Controller\\Entity\\AdvertController::editAction',));
            }
            not_entity_advert_edit:

            // entity_advert_delete
            if (preg_match('#^/entity_advert/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_entity_advert_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_advert_delete')), array (  '_controller' => 'Acme\\ActuBundle\\Controller\\Entity\\AdvertController::deleteAction',));
            }
            not_entity_advert_delete:

        }

        elseif (0 === strpos($pathinfo, '/entity_actor')) {
            // entity_actor_index
            if ('/entity_actor' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_entity_actor_index;
                }

                $ret = array (  '_controller' => 'Acme\\ActeurBundle\\Controller\\Entity\\ActorController::indexAction',  '_route' => 'entity_actor_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entity_actor_index'));
                }

                return $ret;
            }
            not_entity_actor_index:

            // entity_actor_show
            if (preg_match('#^/entity_actor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_entity_actor_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_actor_show')), array (  '_controller' => 'Acme\\ActeurBundle\\Controller\\Entity\\ActorController::showAction',));
            }
            not_entity_actor_show:

            // entity_actor_new
            if ('/entity_actor/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_entity_actor_new;
                }

                return array (  '_controller' => 'Acme\\ActeurBundle\\Controller\\Entity\\ActorController::newAction',  '_route' => 'entity_actor_new',);
            }
            not_entity_actor_new:

            // entity_actor_edit
            if (preg_match('#^/entity_actor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_entity_actor_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_actor_edit')), array (  '_controller' => 'Acme\\ActeurBundle\\Controller\\Entity\\ActorController::editAction',));
            }
            not_entity_actor_edit:

            // entity_actor_delete
            if (preg_match('#^/entity_actor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_entity_actor_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_actor_delete')), array (  '_controller' => 'Acme\\ActeurBundle\\Controller\\Entity\\ActorController::deleteAction',));
            }
            not_entity_actor_delete:

        }

        // acme_actu_homepage
        if ('/Actu' === $pathinfo) {
            return array (  '_controller' => 'Acme\\ActuBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_actu_homepage',);
        }

        // acme_work_homepage
        if ('/Work' === $pathinfo) {
            return array (  '_controller' => 'Acme\\WorkBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_work_homepage',);
        }

        // acme_filiale_homepage
        if ('/Filiale' === $pathinfo) {
            return array (  '_controller' => 'Acme\\FilialeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_filiale_homepage',);
        }

        // acme_home_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Acme\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_home_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'acme_home_homepage'));
            }

            return $ret;
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
