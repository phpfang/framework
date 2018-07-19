<?php
return array(
	//数据库配置信息
	'DB_TYPE'   => 'mysql',      // 数据库类型
	'DB_HOST'   => 'localhost',  // 服务器地址
	'DB_NAME'   => 'framework',  // 数据库名
	'DB_USER'   => 'root',       // 用户名
	'DB_PWD'    => 'root',       // 密码
	'DB_PORT'   => 3306,         // 端口
	'DB_PREFIX' => '',           // 数据库表前缀
	'DB_CHARSET'=> 'utf8',       // 字符集

	'SESSION_AUTO_START' =>false,//系统不自动启动Session
    'SESSION_OPTIONS'=>array(
        'use_trans_sid'=>1,
        'expire'=>3600,//设置过期时间session.gc_maxlifetime的值为1小时
    ),


	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__'=>__ROOT__.'/Public',
	),
);