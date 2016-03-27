<?php
require 'Algorithm.class.php';
require 'File.class.php';

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

$dir = '/tmp';
\Util\File::listDeep($dir);

