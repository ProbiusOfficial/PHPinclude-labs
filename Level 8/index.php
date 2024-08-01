<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 8 : php协议_php://filter_过滤器&字符串过滤器 --- 

php://filter - (PHP_Version>=5.0.0)其参数会在该协议路径上进行传递，多个参数都可以在一个路径上传递，从而组成一个过滤链，常用于数据读取，在特殊情况下，利用特性还可以实现代码执行。无依赖，但在过滤链的代码执行中 php://temp 可能需要allow_url_include:On

依赖：
allow_url_fopen:Off/On
allow_url_include :Off/On

其参数如下：
resource=<要过滤的数据流>	这个参数是必须的。它指定了你要筛选过滤的数据流。 resource=flag.php
read=<读链的筛选列表>	该参数可选。可以设定一个或多个过滤器名称，以管道符（|）分隔。 php://filter/read=A|B|C/resource=flag.php
write=<写链的筛选列表>	该参数可选。可以设定一个或多个过滤器名称，以管道符（|）分隔。 php://filter/write=A|B|C/resource=flag.php
<；两个链的筛选列表>	任何没有以 read= 或 write= 作前缀 的筛选器列表会视情况应用于读或写链。 php://filter/A|B|C/resource=flag.php

【过滤器列表】https://www.php.net/manual/zh/filters.php

【字符串过滤器】https://www.php.net/manual/zh/filters.string.php 
php://filter/A|B|C/resource=sayhello.txt
string.rot13 rot13变换
string.toupper 转大写字母
string.tolower 转小写字母
string.strip_tags 去除html、PHP语言标签 (本特性已自 PHP 7.3.0 起废弃)

该关卡配置:
allow_url_fopen:Off
allow_url_include:Off

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

/* Try ?wrappers=filter/string.rot13/resource=sayhello.txt */
/* 单纯的字符串过滤器解决不了php文件哦~ Try ?wrappers=filter/string.rot13/resource=flag.php */


isset($_GET['wrappers']) ? include("php://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>