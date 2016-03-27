<?php
namespace Util;

class URLUtil {

    //获得url扩展名
    public static function getExt($url) {
		$path = parse_url($url, PHP_URL_PATH);
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return $ext;
	}
}