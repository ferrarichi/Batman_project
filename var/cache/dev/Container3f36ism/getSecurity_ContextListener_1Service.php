<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.context_listener.1' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/ContextListener.php';

$this->services['security.context_listener.1'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : ($this->services['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(array()))) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.user.provider.concrete.my_db_provider']) ? $this->services['security.user.provider.concrete.my_db_provider'] : $this->load('getSecurity_User_Provider_Concrete_MyDbProviderService.php')) && false ?: '_'};
}, 2), 'main', ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'});

$instance->setLogoutOnUserChange(false);

return $instance;
