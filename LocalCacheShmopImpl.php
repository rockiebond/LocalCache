<?php
 /***************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * $Id: LocalCacheShmopImpl.php,v 1.00 14-8-13 ����3:52 wangjinhe Exp $
 *
 **************************************************************************/



/**
 * ����shmop�ı��ػ����ʵ�֡�
 *
 * @file LocalCacheShmopImpl.php
 * @author wangjinhe(wangjinhe@baidu.com)
 * @date 14-8-13 ����3:52
 * @version $Revision: 1.00 $
 * @brief
 *
 **/

class LocalCacheShmopImpl implements LocalCache{

    /**
     * �洢һ�����������ػ��档
     *
     * @param $key �ַ��������͵�key
     * @param $value ֵ
     * @return mixed
     */
    function put($key, $value)
    {
        // TODO: Implement put() method.
    }

    /**
     * ��ȡһ�����ػ����е�ֵ��
     *
     * @param $key
     * @return mixed
     */
    function get($key)
    {
        // TODO: Implement get() method.
    }

    /**
     * ɾ��һ�����ػ����Ӧkey��ֵ��
     *
     * @param $key
     * @return mixed
     */
    function delete($key)
    {
        // TODO: Implement delete() method.
    }

    /**
     * �жϱ��ػ����е�ֵ�Ƿ���ڡ�
     * @param $key
     * @return mixed
     */
    function isExist($key)
    {
        // TODO: Implement isExist() method.
    }

    /**
     * ��ձ��ػ��档
     * @return bool ����Ƿ�ɹ�
     */
    function clear()
    {
        // TODO: Implement clear() method.
    }
}