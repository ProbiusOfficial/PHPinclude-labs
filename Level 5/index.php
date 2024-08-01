<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 5 : http:// & https:// --- 

Just a Simple Challenge www
 
该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- challenge.txt 不妨先访问看看？
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/

/* Try ?wrappers=127.0.0.1/challenge.txt */

isset($_GET['wrappers']) ? include("http://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>