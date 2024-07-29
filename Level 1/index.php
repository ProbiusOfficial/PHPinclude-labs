<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 1 : file协议の本家 --- 

文件包含题目大多会涉及封装协议，靶场会讲解一些高频出现的协议，按照惯例我们会在每个关卡的头部文字讲解他们，当然你也可以自行在PHP手册中查询： 
【PHP手册 - 支持的协议和封装协议】https://www.php.net/manual/zh/wrappers.php

本关卡你将只能使用 file 协议 — 访问本地文件系统(https://www.php.net/manual/zh/wrappers.file.php) 换个说法，每一个include函数调用行为都是以当前脚本所在目录为默认目录的file协议调用: include("filename") <=> include("file://" . __DIR__ . "/filename"); 
不过可惜的是，引入file协议后你只能使用绝对路径。其次，由于include函数的特性，你引入的文件如果内容符合php语法，那么他会被执行，这也就意味着我们无法通过file协议或者直接使用include方式去获取存储在变量中的flag。

依赖：
allow_url_fopen:off/on
allow_url_include :off/on

相关文件：
- 当前目录下 phpinfo.txt 内容为：<?php phpinfo(); ?>
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

 
*/

//Try ?wrappers=/var/www/html/phpinfo.txt
//flag? why not ?wrappers=/var/www/html/flag.php (,,Ò‿Ó,,)

isset($_GET['wrappers']) ? include("file://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>