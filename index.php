<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 9:11
 */

echo $_SERVER['SERVER_NAME'];
$url = $_SERVER['SERVER_NAME'].'/web';
$url = './web';
header('Location:'.$url);