<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcher.php';
include_once $this->targetDirs[3].'/vendor/symfony/expression-language/Expression.php';
include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ParsedExpression.php';
include_once $this->targetDirs[3].'/vendor/symfony/expression-language/SerializedParsedExpression.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/AccessMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/AccessMap.php';

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/jouer'), array(0 => new \Symfony\Component\ExpressionLanguage\SerializedParsedExpression('user.getisBan() == \'off\'', 'O:52:"Symfony\\Component\\ExpressionLanguage\\Node\\BinaryNode":2:{s:5:"nodes";a:2:{s:4:"left";O:53:"Symfony\\Component\\ExpressionLanguage\\Node\\GetAttrNode":2:{s:5:"nodes";a:3:{s:4:"node";O:50:"Symfony\\Component\\ExpressionLanguage\\Node\\NameNode":2:{s:5:"nodes";a:0:{}s:10:"attributes";a:1:{s:4:"name";s:4:"user";}}s:9:"attribute";O:54:"Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode":3:{s:68:"' . "\0" . 'Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode' . "\0" . 'isIdentifier";b:1;s:5:"nodes";a:0:{}s:10:"attributes";a:1:{s:5:"value";s:8:"getisBan";}}s:9:"arguments";O:55:"Symfony\\Component\\ExpressionLanguage\\Node\\ArgumentsNode":3:{s:8:"' . "\0" . '*' . "\0" . 'index";i:-1;s:5:"nodes";a:0:{}s:10:"attributes";a:0:{}}}s:10:"attributes";a:1:{s:4:"type";i:2;}}s:5:"right";O:54:"Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode":3:{s:68:"' . "\0" . 'Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode' . "\0" . 'isIdentifier";b:0;s:5:"nodes";a:0:{}s:10:"attributes";a:1:{s:5:"value";s:3:"off";}}}s:10:"attributes";a:1:{s:8:"operator";s:2:"==";}}')), NULL);

return $instance;
