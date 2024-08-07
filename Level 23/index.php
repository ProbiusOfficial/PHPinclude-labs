<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 23 : 伪协议读文件二次URL编码 --- 

try：
php://filter/convert.%25%36%32%25%36%31%25%37%33%25%36%35%25%33%36%25%33%34%25%32%64%25%36%35%25%36%65%25%36%33%25%36%66%25%36%34%25%36%35/resource=index.php

or https://www.php.net/manual/zh/mbstring.supported-encodings.php :
php://filter/convert.iconv.ASCII.UCS-2BE/resource=index.php
php://filter/convert.iconv.utf-8.utf-7/resource=index.php
 
该关卡配置:
allow_url_fopen=Off
allow_url_include=Off

相关文件：

- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/

/* ? */


function hello_ctf($file){
    if(preg_match("/base|string/i", $file)){
        die("WAF");
    }else{
        include("php://filter/".$file);
    }
    
}

highlight_file(__FILE__);

isset($_GET['file']) ? hello_ctf($_GET['file']) : phpinfo();

?>
