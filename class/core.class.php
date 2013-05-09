<?php

/**
 core.class.php
    XBlog 核心类
 author: enj0y
 email:	 hackes#outlook.com
 */

 if ( !defined( IN_XBLOG ) ) die( "Well.You've did something bad,son." );
 
 class XB{
	function log(){
		// echo XB::log();
		return "XBlog alpha (build 20130509)";
	}
	
	function set(){
		// XB::set($id,$title,$body,$date);
		//写博客 编辑博客
	}
	
	function del(){
		//删除
	}
	
	function get(){
		// XB::get($id);
		//读取博客
	}
 }
 
?>