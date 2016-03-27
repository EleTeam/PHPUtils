<?php
namespace Util;

class File {
    //获取文件夹里的文件及其子文件
    public static function listDeep($dir, $show=true) {
        if (!is_dir($dir))
            return;

        $files = array();
        $handle = opendir($dir);
        if (!$handle)
            return;

        if ($show)
            echo $dir . "<br>";

        $files[] = $dir;
        while (($file = readdir($handle)) !== false) {
            if ($file == '.' || $file == '..')
                continue;
            $file = $dir . '/' . $file;
            if (is_dir($file)) {
                $files[] = self::listDeep($file);
            } else {
                $files[] = $file;

                if ($show)
                    echo $file . "<br>";
            }
        }

        closedir($handle);
        return $files;
    }
}