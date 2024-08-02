<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 3 : data协议_2 --- 

有了一些过滤，但是这肯定难不倒聪明的你ww

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

preg_match("/flag|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\-|\_|\+|\=|\./i", $_GET['wrappers']) ? '' : include("data://text/plain".$_GET['wrappers']);

highlight_file(__FILE__);

?>