<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 10 : 文件系统函数_file_get_contents() --- 

我们常见的文件包含题目的大多数考点主要集中在类似 include() 函数（这里的类似强调的是 incdlue、require、include_once、require_once）的调用上，除开直接的文本包含，更多还涉及到了一些封装协议(wrappers)的使用，比如 file 协议、data 协议、php 协议等等，早在我们之前提及该部分对应文档 【支持的协议和封装协议】https://www.php.net/manual/zh/wrappers.php 时，其中的这样一句话就有强调 “PHP 带有很多内置 URL 风格的封装协议，可用于类似 fopen()、 copy()、 file_exists() 和 filesize() 的文件系统函数。”这些函数的特定 —— 【文件系统·文件系统函数】https://www.php.net/manual/zh/book.filesystem.php。

所以在文件包含的题目中，除了include类型函数，其他文件系统函数也可以用来考察协议方面的内容，比如 file_put_contents(), file_get_contents(), file(), readfile() .etc

该关卡使用的是 file_get_contents() 函数(https://www.php.net/manual/zh/function.file-get-contents.php) 他会将整个文件读入一个字符串,同样的他支持封装协议(wrappers)的使用。

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

/* 我觉得你的基础做这一关肯定没问题ww */

function hello_ctf($file){
    if(preg_match("/flag/", $file)){
        die("You CANNOT See The Secret Message!");
    }else{
        var_dump($file);
    }
}

isset($_GET['file']) ? hello_ctf($_GET['file']) : '';

highlight_file(__FILE__);

?>