<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 11- : 封装协议解析 --- 

死亡绕过前置关卡，最早来源于P牛2016年的博客文章：https://www.leavesongs.com/PENETRATION/php-filter-magic.html
不过由于PHP版本的更新，string.strip_tags 已经被弃用。

注：该关卡没有FLAG.

filter过滤器：
string.rot13
string.strip_tags 去除html、PHP语言标签 (本特性已自 PHP 7.3.0 起废弃)
convert.base64-encode 和 convert.base64-decode
convert.iconv.<input-encoding>.<output-encoding> 或 convert.iconv.<input-encoding>/<output-encoding>
...https://www.php.net/manual/zh/filters.convert.php
*/

function helloctf($filter){
    $wrapper = "php://filter/read=".$filter."/resource=php://input";
    echo "This is what you got:"."<br>";
    readfile($wrapper);
}

isset($_GET['filter']) ? helloctf($_GET['filter']) : '';

highlight_file(__FILE__);

?>