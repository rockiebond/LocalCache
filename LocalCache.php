<?php
 /***************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * $Id: LocalCache.php,v 1.00 14-8-13 ����3:15 wangjinhe Exp $
 *
 **************************************************************************/



/**
 * @file LocalCache.php
 * @author wangjinhe(wangjinhe@baidu.com)
 * @date 14-8-13 ����3:15
 * @version $Revision: 1.00 $
 * @brief
 *
 **/

interface LocalCache {
    /**
     * �洢һ�����������ػ��档
     *
     * @param $key �ַ��������͵�key
     * @param $value ֵ
     * @return mixed
     */
    function put($key,$value);

    /**
     * ��ȡһ�����ػ����е�ֵ��
     *
     * @param $key
     * @return mixed
     */
    function get($key);

    /**
     * ɾ��һ�����ػ����Ӧkey��ֵ��
     *
     * @param $key
     * @return mixed
     */
    function delete($key);

    /**
     * �жϱ��ػ����е�ֵ�Ƿ���ڡ�
     * @param $key
     * @return mixed
     */
    function isExist($key);

    /**
     * ��ձ��ػ��档
     * @return bool ����Ƿ�ɹ�
     */
    function clear();
} 