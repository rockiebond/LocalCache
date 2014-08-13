<?php
 /***************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * $Id: LocalCache.php,v 1.00 14-8-13 下午3:15 wangjinhe Exp $
 *
 **************************************************************************/



/**
 * @file LocalCache.php
 * @author wangjinhe(wangjinhe@baidu.com)
 * @date 14-8-13 下午3:15
 * @version $Revision: 1.00 $
 * @brief
 *
 **/

interface LocalCache {
    /**
     * 存储一个变量到本地缓存。
     *
     * @param $key 字符串或整型的key
     * @param $value 值
     * @return mixed
     */
    function put($key,$value);

    /**
     * 获取一个本地缓存中的值。
     *
     * @param $key
     * @return mixed
     */
    function get($key);

    /**
     * 删除一个本地缓存对应key的值。
     *
     * @param $key
     * @return mixed
     */
    function delete($key);

    /**
     * 判断本地缓存中的值是否存在。
     * @param $key
     * @return mixed
     */
    function isExist($key);

    /**
     * 清空本地缓存。
     * @return bool 清除是否成功
     */
    function clear();
} 