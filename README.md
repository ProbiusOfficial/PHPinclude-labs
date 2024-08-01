# PHPinclude-labs
PHP文件包含类靶场，各类协议的讲解以及基于协议的LFI/RFI



## 2024/07/29 更新

- Level 0: include_base 体验关
- Level 1: file协议
- Level 2: data协议_1
- Level 3:  data协议_2
- Level 4: http:// & https://_1
- Level 5: http:// & https://_2
- Level 6: php协议_简介
- Level 7: php协议_php://input
- Level 8: php协议_php://filter_过滤器&字符串过滤器
- Level 9: php协议_php://filter_转换过滤器

DockerFile 还有后续关卡根据后面课程情况更新（ 还在想怎么写后面的内容（）

## 2024/08/02 更新

为所有关卡添加了独立的 Dockerfile

- Level 10: 文件系统函数简介 & 文件系统函数_file_get_contents()
- Level 11: 文件系统函数_file_put_contents()
- Level 11-:封装协议解析（选自P牛2016年的文章 Filter的妙用）
- Level 11+:文件系统函数\_file_put_contents()_死亡绕过
- Level 12: LFI&&RFI的本质
- Level 13: LFI\_日志文件包含_Nginx
- Level 14: LFI\_日志文件包含_Apache
- Level 15: LFI_Session文件包含
- Level 16: FilterChain:THE_END_OF_LFI
- Level 17: FilterChain:file read from error-based oracle

## WriteUp

等一段时间补充（ 玩两天再说（）当然欢迎Pr（逃

### Level 0

```php
isset($_GET['wrappers']) ? include($_GET['wrappers']) : '';
```

一个三目运算，其实等价于：

```php
if (isset($_GET["wrappers"])) {
    include($_GET["wrappers"]);
} else {
}

```

作为一个没有过滤，纯include的关卡，0 号关卡没有太多意义，你可以在这个题目中测试你想要使用的包含姿势，当然关卡的文本在后面可能会有用。
