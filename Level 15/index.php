<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 15 : LFI_Session文件包含 --- 


该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

function hello_ctf($file){
    if(preg_match("/file|http|ftp|php|zlib|data|glob|phar|ssh2|rar|ogg|expect|log|\.|\:/i", $file)){
        die("No Wrappers! No log! No suffix!");
    }
    include($file);
}

isset($_GET['file']) ? hello_ctf($_GET['file']) : '';

highlight_file(__FILE__);

?>

