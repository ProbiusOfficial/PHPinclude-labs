<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 16 : FilterChain:THE_END_OF_LFI --- 

可用脚本：https://github.com/synacktiv/php_filter_chain_generator
相关文章：https://hello-ctf.feishu.cn/docx/PNRedwzpBoJdTdxKhIacb1v8nZe

该关卡配置:
allow_url_fopen:Off
allow_url_include:Off

相关文件：
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

($_GET['action'] ?? 'read' ) === 'read' ? readfile($_GET['file'] ?? 'index.php') : include_once($_GET['file'] ?? 'index.php');

highlight_file(__FILE__);

?>

