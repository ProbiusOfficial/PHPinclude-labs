<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 4 : http:// & https:// --- 

本关卡你将只能使用 http/https 协议 (https://www.php.net/manual/zh/wrappers.http.php) — 常规 URL 形式，允许通过 HTTP 1.0 的 GET方法，以只读访问文件或资源，通常用于远程包含。
注意远程文件需要为可读的文本形式。

依赖：allow_url_fopen:on;allow_url_include:on;

该关卡配置:
allow_url_fopen:on
allow_url_include:on

相关文件：
- 当前目录下 phpinfo.txt 内容为：<?php phpinfo(); ?>
- 当前目录下 backdoor.txt 内容为: <?php @eval($_POST['ctf']); ?>
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

 
*/

/* Try ?wrappers=127.0.0.1/hello.txt */

isset($_GET['wrappers']) ? include("http://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>