<?php
/*
 * Go! AOP framework
 *
 * @copyright Copyright 2014, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Demo\Example;

 function array_walk(&$input, $funcname, $userdata = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_walk', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([&$input, $funcname, $userdata], 0, \func_num_args()));
}


 function array_walk_recursive(&$input, $funcname, $userdata = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_walk_recursive', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([&$input, $funcname, $userdata], 0, \func_num_args()));
}


 function array_search($needle, $haystack, $strict = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_search', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$needle, $haystack, $strict], 0, \func_num_args()));
}


 function array_fill($start_key, $num, $val)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_fill', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$start_key, $num, $val]);
}


 function array_fill_keys($keys, $val)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_fill_keys', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$keys, $val]);
}


 function array_multisort(&$arr1, &$sort_order = null, &$sort_flags = null, &...$arr2)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_multisort', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([&$arr1, &$sort_order, &$sort_flags], 0, \func_num_args()), $arr2);
}


 function array_push(&$stack, ...$vars)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_push', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([&$stack], $vars);
}


 function array_pop(&$stack)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_pop', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([&$stack]);
}


 function array_shift(&$stack)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_shift', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([&$stack]);
}


 function array_unshift(&$stack, ...$vars)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_unshift', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([&$stack], $vars);
}


 function array_splice(&$arg, $offset, $length = null, $replacement = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_splice', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([&$arg, $offset, $length, $replacement], 0, \func_num_args()));
}


 function array_slice($arg, $offset, $length = null, $preserve_keys = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_slice', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $offset, $length, $preserve_keys], 0, \func_num_args()));
}


 function array_merge($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_merge', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_merge_recursive($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_merge_recursive', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_replace($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_replace', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_replace_recursive($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_replace_recursive', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_keys($arg, $search_value = null, $strict = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_keys', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $search_value, $strict], 0, \func_num_args()));
}


 function array_values($arg)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_values', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg]);
}


 function array_count_values($arg)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_count_values', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg]);
}


 function array_column($arg, $column_key, $index_key = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_column', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $column_key, $index_key], 0, \func_num_args()));
}


 function array_reverse($input, $preserve_keys = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_reverse', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$input, $preserve_keys], 0, \func_num_args()));
}


 function array_reduce($arg, $callback, $initial = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_reduce', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $callback, $initial], 0, \func_num_args()));
}


 function array_pad($arg, $pad_size, $pad_value)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_pad', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg, $pad_size, $pad_value]);
}


 function array_flip($arg)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_flip', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg]);
}


 function array_change_key_case($input, $case = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_change_key_case', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$input, $case], 0, \func_num_args()));
}


 function array_rand($arg, $num_req = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_rand', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $num_req], 0, \func_num_args()));
}


 function array_unique($arg, $flags = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_unique', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $flags], 0, \func_num_args()));
}


 function array_intersect($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_intersect', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_intersect_key($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_intersect_key', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_intersect_ukey($arr1, $arr2, $callback_key_compare_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_intersect_ukey', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_key_compare_func]);
}


 function array_uintersect($arr1, $arr2, $callback_data_compare_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_uintersect', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_compare_func]);
}


 function array_intersect_assoc($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_intersect_assoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_uintersect_assoc($arr1, $arr2, $callback_data_compare_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_uintersect_assoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_compare_func]);
}


 function array_intersect_uassoc($arr1, $arr2, $callback_key_compare_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_intersect_uassoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_key_compare_func]);
}


 function array_uintersect_uassoc($arr1, $arr2, $callback_data_compare_func, $callback_key_compare_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_uintersect_uassoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_compare_func, $callback_key_compare_func]);
}


 function array_diff($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_diff', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_diff_key($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_diff_key', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_diff_ukey($arr1, $arr2, $callback_key_comp_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_diff_ukey', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_key_comp_func]);
}


 function array_udiff($arr1, $arr2, $callback_data_comp_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_udiff', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_comp_func]);
}


 function array_diff_assoc($arr1, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_diff_assoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1], $arrays);
}


 function array_udiff_assoc($arr1, $arr2, $callback_key_comp_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_udiff_assoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_key_comp_func]);
}


 function array_diff_uassoc($arr1, $arr2, $callback_data_comp_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_diff_uassoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_comp_func]);
}


 function array_udiff_uassoc($arr1, $arr2, $callback_data_comp_func, $callback_key_comp_func)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_udiff_uassoc', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arr1, $arr2, $callback_data_comp_func, $callback_key_comp_func]);
}


 function array_sum($arg)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_sum', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg]);
}


 function array_product($arg)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_product', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$arg]);
}


 function array_filter($arg, $callback = null, $use_keys = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_filter', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $callback, $use_keys], 0, \func_num_args()));
}


 function array_map($callback, ...$arrays)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_map', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$callback], $arrays);
}


 function array_chunk($arg, $size, $preserve_keys = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_chunk', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$arg, $size, $preserve_keys], 0, \func_num_args()));
}


 function array_combine($keys, $values)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_combine', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$keys, $values]);
}


 function array_key_exists($key, $search)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('array_key_exists', __NAMESPACE__);
    }
    return $__joinPoint->__invoke([$key, $search]);
}


 function file_get_contents($filename, $flags = null, $context = null, $offset = null, $maxlen = null)
{
    static $__joinPoint = null;
    if (!$__joinPoint) {
        $__joinPoint = \Go\Proxy\FunctionProxy::getJoinPoint('file_get_contents', __NAMESPACE__);
    }
    return $__joinPoint->__invoke(\array_slice([$filename, $flags, $context, $offset, $maxlen], 0, \func_num_args()));
}

\Go\Proxy\FunctionProxy::injectJoinPoints('Demo\Example',array (
  'func' => 
  array (
    'array_walk' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_walk_recursive' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_search' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_fill' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_fill_keys' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_multisort' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_push' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_pop' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_shift' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_unshift' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_splice' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_slice' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_merge' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_merge_recursive' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_replace' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_replace_recursive' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_keys' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_values' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_count_values' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_column' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_reverse' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_reduce' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_pad' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_flip' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_change_key_case' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_rand' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_unique' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_intersect' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_intersect_key' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_intersect_ukey' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_uintersect' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_intersect_assoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_uintersect_assoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_intersect_uassoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_uintersect_uassoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_diff' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_diff_key' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_diff_ukey' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_udiff' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_diff_assoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_udiff_assoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_diff_uassoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_udiff_uassoc' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_sum' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_product' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_filter' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_map' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_chunk' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_combine' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'array_key_exists' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundArrayFunctions',
    ),
    'file_get_contents' => 
    array (
      0 => 'advisor.Demo\\Aspect\\FunctionInterceptorAspect->aroundFileGetContents',
    ),
  ),
));