<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 19 : opcache缓存 --- 

Modified From: [湖湘杯2020] 题目名字不重要反正题挺简单的

OPcache会在特定的目录缓存编译后的PHP文件，以达到在你下次访问的时候直接调用缓存中的字节码以提高响应速度 —— 利用这一特性，如果我们复写缓存文件为恶意代码，那么下次调用的时候就会执行恶意代码。  
当然在文件包含的这个关卡，我们只是简要的利用他会生成 filename.type.bin 这一特性去读取文件。  
具体的细节师傅们可以自行了解，你也可以通过修改该靶场的文件来搭建复写类型的RCE漏洞。  
[F12 - opcache导致的RCE复现 ](https://www.cnblogs.com/F12-blog/p/18001985)  
[笑花大王 - php7的Opcache getshell](https://www.cnblogs.com/xhds/p/13239331.html)

计算对应ID的脚本以附在靶场中:exp.py
 
该关卡配置:
allow_url_fopen=Off
allow_url_include=Off
opcache.enable=1
opcache.validate_timestamps=0
opcache.file_cache_only=1 
opcache.file_cache=/var/www/html/opcache

相关文件：

- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/

/* ? */


function hello_ctf($file){
    
    //I heard you are good at PHPINFO+LFI, flag is in flag.php, find it my dear noob vegetable hacker.

    if ( $file === "phpinfo" ) {
        phpinfo();
        exit;
    }

    if ( preg_match('/proc/i' , $file) ) {
        die("private");
    }

    $file = "/var/www/html/" . $file;
    $content = file_get_contents($file);

    if ( !$content ) {
        die("nothing");
    }

    if ( preg_match("/script|<\?/i", $content) ) {
        die("bypass me");
    }

    include_once $file;

}
    
isset($_GET['file']) ? hello_ctf($_GET['file']) : '';

highlight_file(__FILE__);


?>
