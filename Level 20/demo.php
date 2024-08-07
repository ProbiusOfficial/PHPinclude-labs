<?php
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - A Demo for Level 20 --- 

当我们开启 register_argc_argv = On ，我们便可以通过$_SERVER[‘argv’]`获得命令行参数，尝试在 URL/demo.php 后面拼接一些参数：?aaa+bbb+ccc

注意其中是用+作为分隔符的，不是&

*/
var_dump($_SERVER['argv']);

highlight_file(__FILE__);

?>
