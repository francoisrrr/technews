<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\ArticleRepository' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Repository\\ArticleRepository.php';

return $this->privates['App\Repository\ArticleRepository'] = new \App\Repository\ArticleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
