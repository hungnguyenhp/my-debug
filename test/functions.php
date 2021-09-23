<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 9/19/18
 * Time: 13:54
 */
if (!function_exists('dump')) {
    /**
     * Function dump
     *
     * @param string $str
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/22/2021 11:38
     */
    function dump($str = '')
    {
        echo "<pre>";
        var_dump($str);
        echo "</pre>";
    }
}

if (!function_exists('testLogPath')) {
    /**
     * Function testLogPath
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/22/2021 11:28
     */
    function testLogPath()
    {
        return __DIR__ . '/../tmp/';
    }
}