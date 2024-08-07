<?php 
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 22 : Nginx 在后端 Fastcgi 响应过大产生临时文件 --- 

Modified form [HXPCTF 2021]includer's revenge

参考文章：https://tttang.com/archive/1384/
 
*/

function HelloCTF_WAF($file){
    if(preg_match("/iconv/i", $file)){
        die("WAF");
    }else{
        return $file;
    }
}

($_GET['action'] ?? 'read' ) === 'read' ? readfile(HelloCTF_WAF($_GET['file']) ?? 'index.php') : include_once(HelloCTF_WAF($_GET['file']) ?? 'index.php');

highlight_file(__FILE__);

?>

