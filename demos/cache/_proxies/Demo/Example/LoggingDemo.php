<?php
namespace Demo\Example;

use Demo\Annotation\Loggable as Loggable;
/**
 * Example class to show how to use logging with AOP
 */
class LoggingDemo extends LoggingDemo__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = [];
    
    /**
     * Executes a task and logs all incoming arguments
     *
     * @Loggable
     * @param mixed $task Some specific argument
     */
    public function execute($task)
    {
        return self::$__joinPoints['method:execute']->__invoke($this, [$task]);
    }
    
    /**
     * Protected method can be also loggable
     *
     * @Loggable
     *
     * @param mixed $task Specific task
     * @param string $level
     */
    protected function perform($task, $level)
    {
        return self::$__joinPoints['method:perform']->__invoke($this, [$task, $level]);
    }
    
    /**
     * Everything is possible with AOP, so static methods can be intercepted too
     *
     * @Loggable
     *
     * @param string $task Some specific argument
     */
    public static function runByName($task)
    {
        return self::$__joinPoints['static:runByName']->__invoke(static::class, [$task]);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Demo\Example\LoggingDemo',array (
  'method' => 
  array (
    'execute' => 
    array (
      0 => 'advisor.Demo\\Aspect\\LoggingAspect->beforeMethodExecution',
    ),
    'perform' => 
    array (
      0 => 'advisor.Demo\\Aspect\\LoggingAspect->beforeMethodExecution',
    ),
  ),
  'static' => 
  array (
    'runByName' => 
    array (
      0 => 'advisor.Demo\\Aspect\\LoggingAspect->beforeMethodExecution',
    ),
  ),
));