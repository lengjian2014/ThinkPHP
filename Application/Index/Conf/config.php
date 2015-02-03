<?php
return array(
	//'配置项'=>'配置值'
	/* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public',
        '__ADDONS__' => __ROOT__ . '/Public/Addons',
        '__IMG__'    => __ROOT__ . '/Public/images',
        '__CSS__'    => __ROOT__ . '/Public/css',
        '__JS__'     => __ROOT__ . '/Public/js',
    ),

	'LAYOUT_ON'=>true, //模板布局
    'LAYOUT_NAME'=>'../../Layout/layout',
);