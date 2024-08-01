<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 13 : LFI_日志文件包含_Nginx --- 

在wrappers被过滤的情况下，通常使用日志文件包含的方式来绕过，由于文件包含漏洞最大的需求点是文件，所以我们需要得知日志文件的位置，通常情况下包含默认位置即可。
该关卡的Dockerfile对于日志的配置为：VOLUME ["/var/log/nginx"]

+ /var/log/nginx/         - 默认Nginx日志目录
+ + /var/log/nginx/access.log

该关卡配置:
allow_url_fopen:On
allow_url_include:Off

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

function hello_ctf($file){
    if(preg_match("/file|http|ftp|php|zlib|data|glob|phar|ssh2|rar|ogg|expect/i", $file)){
        die("No Wrappers!");
    }
    include($file);
}

isset($_GET['file']) ? hello_ctf($_GET['file']) : '';

highlight_file(__FILE__);

?>

