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

P牛2021年的文章中 0x06 pearcmd.php的巧妙利用 ：https://www.leavesongs.com/PENETRATION/docker-php-include-getshell.html
 
该关卡配置:
allow_url_fopen=Off
allow_url_include=Off

相关文件：

- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/

/* ? */


function hello_ctf($file){
    if(preg_match("/base|string|/i", $file)){
        die("WAF");
    }else{
        include("php://filter/".$file);
    }
    
}

isset($_GET['file']) ? hello_ctf($_GET['file']) : phpinfo();

highlight_file(__FILE__);


?>
