<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 14 : LFI_日志文件包含_Apache --- 

Apache 的日志位置可能会因为题目所用镜像版本不同而有所差异，该关卡使用的官方 php:7.3-apache 镜像，日志文件位置如下：

+ /var/log/apache2/         - 默认Apache日志目录
+ + /var/log/apache2/access.log

该关卡配置:
allow_url_fopen:On
allow_url_include:Off

short_open_tag = On

PHP的标签有至少四种：<?php ?>、<\?= ?>、<script language="php"></script>、<\? ?>、<\% %>(ASP风格)、<\%= %>。
"<\? ?>"的支持需要short_open_tag=On。
"<\%%>"的支持需要asp_tags=On。
"<\?= ?>"总是有效的，无论short_open_tag是否设置。
除了<?php ?>和<\?=?>其他的标签在PHP7.0.0中被移除,强烈建议使用<?php?>标签，代码才能更好的兼容性。

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

