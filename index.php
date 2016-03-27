<?php
date_default_timezone_set('UTC');

require 'Algorithm.class.php';
require 'File.class.php';
require 'URLUtil.class.php';

$arr = [7, 3, 7, 9, 0, 2, 3];
$arr = \Util\Algorithm::bubbleSort($arr);
echo join(', ', $arr) . '<br><br>';

$arr = [7, 3, 7, 9, 0, 2, 3];
$arr = \Util\Algorithm::selectSort($arr);
echo join(', ', $arr) . '<br><br>';

$arr = [7, 3, 7, 9, 0, 2, 3];
$arr = \Util\Algorithm::insertSort($arr);
echo join(', ', $arr) . '<br><br>';

$arr = [7, 3, 7, 9, 0, 2, 3];
$arr = \Util\Algorithm::quickSort($arr);
echo join(', ', $arr) . '<br><br>';

$fiboArr = \Util\Algorithm::fibo(10);
echo join(', ', $fiboArr) . '<br><br>';

$url = 'qq.com/abc/test.html';
//$url = 'qq.com/abc/test/sf?d=1';
echo \Util\URLUtil::getExt($url) . '<br><br>';

$dir = '/tmp';
\Util\File::listDeep($dir);

