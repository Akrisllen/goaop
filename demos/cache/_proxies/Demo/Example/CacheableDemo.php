<?php
namespace Demo\Example;

use Demo\Annotation\Cacheable as Cacheable;
/**
 * Example class to show how to use caching with AOP
 */
class CacheableDemo extends CacheableDemo__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = [];
    
    /**
     * Returns a report and explicitly cache a result for future use
     *
     * In this example we use "Cacheable" annotation to explicit mark a method
     *
     * @param string $from This can be any value
     * @Cacheable(time=10)
     *
     * @return string
     */
    public function getReport($from)
    {
        return self::$__joinPoints['method:getReport']->__invoke($this, [$from]);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Demo\Example\CacheableDemo',array (
  'method' => 
  array (
    'getReport' => 
    array (
      0 => 'advisor.Demo\\Aspect\\CachingAspect->aroundCacheable',
    ),
  ),
));