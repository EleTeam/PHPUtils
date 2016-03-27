<?php
namespace Util;

class Algorithm {
    //冒泡排序: 内循环两两相比较，把小的往前移
    public static function bubbleSort($arr) {
        $count = count($arr);
        for ($i=0; $i<$count-1; $i++) {
            for ($j=$count-1; $j>$i; $j--) {
                if ($arr[$j] < $arr[$j-1]) {
                    $tmp = $arr[$j-1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }

    //选择排序：假定每次外循环的第一个值是当前最小的
    public static function selectSort($arr) {
        $count = count($arr);
        for ($i=0; $i<$count-1; $i++) {
            //假设最小值的位置
            $pos = $i;
            for ($j=$count-1; $j>$i; $j--) {
                if ($arr[$j] < $arr[$pos]) {
                    $pos = $j;
                }
            }
            if ($pos != $i) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$pos];
                $arr[$pos] = $tmp;
            }
        }
        return $arr;
    }

    //插入排序：假设前面已经排序好了，在已排序序列中从后向前扫描，大的元素向后移，直到找到小于或者等于的元素
    //因为内循环不用扫描前面排好序的所有元素，所有内循环用while而不用for
    public static function insertSort($arr) {
        $count = count($arr);
        for ($i=1; $i<$count; $i++) {
            $item = $arr[$i];
            $pos = $i;
            while ($pos>0 && $item<$arr[$pos-1]) {
                $arr[$pos] = $arr[$pos-1];
                $pos--;
            }
            if ($pos < $i) {
                $arr[$pos] = $item;
            }
        }
        return $arr;
    }

    //快速排序：选择轴值，左右两边同时扫描直到确认轴值位置
    public static function quickSort($arr, $left=null, $right=null) {
        if ($left === null)
            $left = 0;
        if ($right === null)
            $right = count($arr) - 1;

        if ($left < $right) {
            $item = $arr[$left]; //选择轴值
            $i = $left + 1;
            $j = $right;

            //小于等于轴值的放到左边，大于的放到右边，确定轴值的所处位置
            while ($i < $j) {
                while ($i<=$j && $arr[$i]<=$item) //从左边扫描直到找到比轴值大的为止
                    $i++;
                while ($j>=$i && $arr[$j]>$item) //从右边扫描直到找到比轴值小的为止
                    $j--;
                if ($i < $j) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }

            $arr[$left] = $arr[$j];
            $arr[$j] = $item;

            $arr = self::quickSort($arr, $left, $j-1);
            $arr = self::quickSort($arr, $j+1, $right);
        }
        return $arr;
    }

    //斐波那契数列(兔子数列）：从第2项开始，每一项都等于前两项之和。如：0, 1, 1, 2, 3, 5, 8, 13, 21, 34...
    public static function fibo($count) {
        $arr = array();
        if ($count <= 1) {
            $arr[] = 0;
            return $arr;
        }

        $arr[] = 0;
        $arr[] = 1;
        for ($i=2; $i<$count; $i++) {
            $arr[] = $arr[$i-1] + $arr[$i-2];
        }
        return $arr;
    }
}