<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 18 : require/include_once 缺陷：绕过以重复包含文件 --- 

Modified From: [WMCTF2020]Make PHP Great Again.
原理分析文章：https://www.anquanke.com/post/id/213235
 
该关卡配置:
allow_url_fopen:Off
allow_url_include:Off

相关文件：

- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/

/* /proc/self/root? */

include_once("flag.php");
    
isset($_GET['file']) ? include_once $_GET['file'] : '';

highlight_file(__FILE__);

?>

