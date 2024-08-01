<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 11+ : 文件系统函数_file_put_contents()_死亡绕过 --- 

经典 ——　死亡绕过

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

/* hint:(need allow_url_fopen=On)如果 filename 是 "scheme://..." 的格式，则被当成一个 URL，PHP 将搜索协议处理器（也被称为封装协议）来处理此模式。(https://www.php.net/manual/zh/function.fopen.php) */

function hello_ctf($filename,$data){
    if(preg_match("/flag|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\-|\_|\+|\=|\./i", $data)){
        die("WAF!");
    }
    file_put_contents($filename, "<?php die('GAME OVER!') ?>".$data);
}

isset($_GET['filename'])&&isset($_POST['data']) ? hello_ctf($_GET['filename'],$_POST['data']) : '';

highlight_file(__FILE__);

?>