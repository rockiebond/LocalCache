<?php
 /***************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * $Id: LocalCacheShmopImpl.php,v 1.00 14-8-13 下午3:52 wangjinhe Exp $
 *
 **************************************************************************/



/**
 * 基于shmop的本地缓存的实现。
 *
 * @file LocalCacheShmopImpl.php
 * @author wangjinhe(wangjinhe@baidu.com)
 * @date 14-8-13 下午3:52
 * @version $Revision: 1.00 $
 * @brief
 *
 **/

class LocalCacheShmopImpl implements LocalCache{

    /**
     * 存储一个变量到本地缓存。
     *
     * @param $key 字符串或整型的key
     * @param $value 值
     * @return mixed
     */
    function put($key, $value)
    {
        // TODO: Implement put() method.
    }

    /**
     * 获取一个本地缓存中的值。
     *
     * @param $key
     * @return mixed
     */
    function get($key)
    {
        // TODO: Implement get() method.
    }

    /**
     * 删除一个本地缓存对应key的值。
     *
     * @param $key
     * @return mixed
     */
    function delete($key)
    {
        // TODO: Implement delete() method.
    }

    /**
     * 判断本地缓存中的值是否存在。
     * @param $key
     * @return mixed
     */
    function isExist($key)
    {
        // TODO: Implement isExist() method.
    }

    /**
     * 清空本地缓存。
     * @return bool 清除是否成功
     */
    function clear()
    {
        // TODO: Implement clear() method.
    }
}