<?php 
/*
# -*- coding: utf-8 -*-
# @Author: 探姬
# @Date:   2024-07-28 20:30
# @Repo:   github.com/ProbiusOfficial/PHPinclude-labs
# @email:  admin@hello-ctf.com
# @link:   hello-ctf.com

--- HelloCTF - 文件包含基础靶场 关卡 21 : compress.zlib生成临时文件 --- 

Modified form [hxp 36C3 CTF]includer

参考文章：https://zeddyu.github.io/2020/01/08/36c3-web/#includer
 
*/

declare(strict_types=1);

$rand_dir = 'files/'.bin2hex(random_bytes(32));
mkdir($rand_dir) || die('mkdir');
putenv('TMPDIR='.__DIR__.'/'.$rand_dir) || die('putenv');

highlight_file(__FILE__);

echo 'Hello '.$_POST['name'].' your sandbox: '.$rand_dir."\n";

try {
    if (stripos(file_get_contents($_POST['file']), '<\?') === false) {
        include_once($_POST['file']);
    }
}
finally {
    system('rm -rf '.escapeshellarg($rand_dir));
}



?>

