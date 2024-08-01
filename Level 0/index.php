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
- 根目录下 flag 文件，flag以文本的形式存储在文件中。flag{.....}

——— 请注意理解文件包含的本质，这里的以文本形式存储不单指 /flag 是一个文本类型的文件(或者多数情况下为 flag.txt)，在后续的题目中，这一点还说明该文件没有任何 php 语法特征。
你可以看到，这里相关文件虽然内容是 php 代码，但是由于是 .txt 的文本形式，当你直接访问时，服务器并不会去解析或者说执行它，而是会返回给你文本内容。
比如你可以先尝试直接访问 /DemoFlag.txt 再尝试?wrappers=DemoFlag.txt，你会发现前者服务器直接给你返回了文本内容，你能看见这个示例flag的内容，而后者反而看不到DemoFlag.txt的内容了。
更多细节请查阅：https://www.php.net/manual/zh/function.include.php
*/

// 一种很炫技但是没用的写法嘿嘿 o(*￣▽￣*)ゞ Try ?wrappers=phpinfo.txt

isset($_GET['wrappers']) ? include($_GET['wrappers']) : '';

highlight_file(__FILE__);

?>