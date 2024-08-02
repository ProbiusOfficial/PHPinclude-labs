<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 疑 : data协议 --- 

在 allow_url_include off 的情况下，data 协议是无法工作的x

该关卡配置:
allow_url_fopen:On
allow_url_include:Off

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

 
*/

isset($_GET['wrappers']) ? include("data://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>