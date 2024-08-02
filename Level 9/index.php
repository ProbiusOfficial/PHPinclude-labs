<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 9 : php协议_php://filter_转换过滤器 --- 

依赖：
allow_url_fopen:Off/On
allow_url_include:Off/On

【转换过滤器】https://www.php.net/manual/zh/filters.convert.php
- convert.base64-encode 和 convert.base64-decode
- convert.quoted-printable-encode 和 convert.quoted-printable-decode
- convert.iconv.*

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。

*/


/* base64的转换滤器就能很好的解决php文件了x~ Try ?wrappers=filter/convert.base64-encode/resource=flag.php */


isset($_GET['wrappers']) ? include("php://".$_GET['wrappers']) : '';

highlight_file(__FILE__);

?>