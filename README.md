Xblog
=====

基于阿里云搜索开发的PHP博客服务，无视数据库SQL注入攻击。


构架：

<#View#> => <#NoCall#> => <#Doe#>
#View#:		请求的处理/命中缓存
#NoCall#:	数据提取
#Doe#:		模版编译/写缓存文件



开发进程:

2013-05-09: 开始写核心类