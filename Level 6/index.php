<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 6 : php协议_Demo --- 

php:// — 访问各个输入/输出流（I/O streams），PHP中最为复杂和强大的协议(https://www.php.net/manual/zh/wrappers.php.php)。

在CTF中经常使用的如下：
php://input - 可以访问请求的原始数据的只读流，在POST请求中访问POST的data部分，在enctype="multipart/form-data" 的时候php://input 是无效的。常用于执行代码。 依赖：allow_url_include:On

php://filter - (PHP_Version>=5.0.0)其参数会在该协议路径上进行传递，多个参数都可以在一个路径上传递，从而组成一个过滤链，常用于数据读取，在特殊情况下，利用特性还可以实现代码执行。无依赖，但在过滤链的代码执行中 php://temp 可能需要allow_url_include:On

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

isset($_GET['wrappers']) ? include("php://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>