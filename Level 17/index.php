<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 17 : FilterChain:file read from error-based oracle --- 

可用脚本：https://github.com/synacktiv/php_filter_chains_oracle_exploit
对应文章：https://www.synacktiv.com/publications/php-filter-chains-file-read-from-error-based-oracle

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

function hello_ctf($file){ file($file); }
    
isset($_GET['file']) ? hello_ctf($_GET['file']) : '';

highlight_file(__FILE__);

?>

