<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route.cache_warmup' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Route/RoutesCacheWarmUp.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Route/RoutesCache.php';

return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp(($this->services['sonata.admin.route.cache'] ?? $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDirs[0].'/sonata/admin'), true)), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
